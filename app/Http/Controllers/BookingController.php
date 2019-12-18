<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingDetail;
use App\Enums\BookingStatus;
use Illuminate\Http\Request;
use App\Services\PaymentGateway\Payment;
use Carbon\Carbon;
use App\Event;
use App\ReservedTicket;
use App\TicketClass;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class BookingController extends Controller
{
    protected $payment;
    public function __construct(Payment $p)
    {
        $this->payment = $p;
    }
    public function showSelectTicket(Request $request, $eventId)      
    {
        $event = Event::find($eventId);
        if($event){
            $request->session()->keep('_token');
            return view('front-end.modules.chooseTicket', compact('event'));
        }
        return "Xin loi su kien nay khong ton tai";
    }
    public function validateTickets(Request $request, $eventId)
    {
        $expire_time = Carbon::now()->addMinutes(env('CHECKOUT_TIMEOUT'));
        $event = Event::findorFail($eventId);
        if(!$request->has("tickets")){
            return response()->json([
                'status' => 'error',
                'message' => 'No tickets selected',
            ], 400);
        }
        $tickets = $request->get("tickets");
        ReservedTicket::where('session_id', session()->getId())->delete();
        $order_total = 0;
        $quantity_available_validation_rules = [];
        $validator_fail = false;
        foreach($tickets as $ticket_ordered){
            $current_quantity = $ticket_ordered["quantity"];
            if($current_quantity < 1){
                continue;
            }
            $ticket = TicketClass::where('eventId', $eventId)->where('id', $ticket_ordered["ticket-class"])->first();
            if(!$ticket){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Selected invalid ticket class ',
                ], 400);
            }
            $max_per_person = $ticket->max_ticket;
            $quantity_available_validation_rules[$ticket_ordered["ticket-class"]] = [
                'numeric',
                'min:'. $ticket->minPerPerson,
                'max:'. $max_per_person
            ];
            $quantity_available_validation_messages = [
                $ticket_ordered["ticket-class"]. '.max' => "Số lượng vé tối đa bạn có thể mua là: ". $max_per_person,
                $ticket_ordered["ticket-class"]. '.min' => 'Bạn phải mua it nhất: '. $ticket->minPerPerson,
            ];
            $validator = Validator::make([$ticket_ordered["ticket-class"] => $ticket_ordered["quantity"]], 
                        $quantity_available_validation_rules, $quantity_available_validation_messages);
            if($validator->fails()){
                $validator_fail = true;
                $validator_fail_messages[] = $validator->messages()->toArray();
            }
            $reservedTickets = new ReservedTicket();
            $reservedTickets->ticket_id = $ticket->id;
            $reservedTickets->event_id = $ticket->eventId;
            $reservedTickets->quantity_reserved = $current_quantity;
            $reservedTickets->expires = $expire_time;
            $reservedTickets->session_id = session()->getId();
            $reservedTickets->save();
            $order_total = $order_total + ($current_quantity * $ticket->price);
            $ticket_details[] = [
                'ticket_id' => $ticket->id,
                'type' => $ticket->type,
                'quantity' => $current_quantity,
                'total_price' => $current_quantity * $ticket->price
            ];  
        }
        if($validator_fail){
            return response()->json([
                'status'  => 'error',
                'message' => $validator_fail_messages,
            ], 400);
        }
        if(empty($ticket_details)){
            return response()->json([
                'status'  => 'error',
                'message' => 'No valid ticket selected',
            ], 400);
        }
        Session::put('ticket_order_'. $eventId, [
            'event_id' => $eventId,
            'tickets' => $ticket_details,
            'expires' => $expire_time,
            'reserved_tickets_id' => $reservedTickets->id,
            'order_total' => $order_total,
            // 'account_id' => 
        ]);
        if($request->ajax()){
            return response()->json([
                'status' => 'success',
                'redirectURL' => route('event-checkout', [
                    'eventId' => $eventId
                ])
            ]);
        }
        // dd(Session::all());
        return redirect()->route('event-checkout', [
            'eventId' => $eventId
        ]);
    }
    public function showEventCheckout(Request $request, $eventId)
    {
        
        $order_session = Session::get('ticket_order_' . $eventId);
        if($order_session){
            $expire_timestamp = $order_session['expires']->timestamp;
            if(Carbon::now()->lt($order_session['expires'])){
                $event = Event::find($eventId);
                return view('front-end.modules.payment', compact('event', 'expire_timestamp', 'order_session'));
            }
        }
        return redirect()->route('choose-ticket', ['eventId' => $eventId])->with('jsalert','phiên đặt vé của bạn đã kết thúc');
    }
    public function validateOrder(Request $request, $eventId)
    {
        $order_session = session()->get('ticket_order_' . $eventId);
        if (!$order_session) {
            return response()->json([
                'status'      => 'error',
                'message'     => 'Phiên làm việc đã kết thúc.',
                'redirectUrl' => route('choose-ticket', [
                    'eventId' => $eventId,
                ])
                ], 440);
        }
        if(Carbon::now()->gt($order_session['expires'])){
            return response()->json([
                'status'      => 'error',
                'message'     => 'Đã hết thời gian đặt vé',
                'redirectUrl' => route('choose-ticket', [
                    'eventId' => $eventId,
                ])
                ], 440);
        }
        $event = Event::findOrFail($eventId);
        $order = new Booking();
        $validator = Validator::make($request->all(), $order->rules, $order->fail_messages);
        if ($validator->fails()) {
            return response()->json([
                'status'   => 'error',
                'messages' => $validator->errors()->all(),
            ]);
        }
        try {
            DB::beginTransaction();
            $order->status = BookingStatus::WaitingForPayment;
            $order->totalPrice = $order_session['order_total'];
            $order->discountPrice = 0;
            $order->firstName = $request['booking_first_name'];
            $order->lastName = $request['booking_last_name'];
            $order->email = $request['booking_email'];
            $order->phone = $request['booking_phone'];
            $order->save();
            //TODO: save booking detail
            foreach ($order_session['tickets'] as $ticket) {
                for ($i=0; $i < $ticket['quantity']; $i++) { 
                    $order->bookingDetails()->save(new BookingDetail(["bookingId" => $order->id, 
                                                    "ticketClassId" => $ticket["ticket_id"]]));
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(), 
            ]);
        }
        $payment_response =  $this->payment->purchase($eventId, $order->transactionId, "thanh toan ve su kien", strval($order->totalPrice));
        if($payment_response->getErrorCode() != 0){
            return response()->json([
                'status'      => 'error',
                'message' => $payment_response->getMessage(),
            ]);    
        }
        return redirect($payment_response->getPayUrl());
    }   
    public function getIPN(Request $request)
    {
        error_log($request->get('localMessage'));
    }
    public function purchase(Request $request)
    {
        return redirect($this->payment->purchase('12345','test vn pay', 20000, $request->ip()));
    }
    public function completePayment(Request $request)
    {
        dd($request);
        // $vnp_SecureHash = $request->vnp_SecureHash;
        // $inputData = array();
        // foreach ($_GET as $key => $value) {
        //     $inputData[$key] = $value;
        // }
        // unset($inputData['vnp_SecureHashType']);
        // unset($inputData['vnp_SecureHash']);
        // ksort($inputData);
        // $i = 0;
        // $hashData = "";
        // foreach ($request as $key => $value) {
        //     if ($i == 1) {
        //         $hashData = $hashData . '&' . $key . "=" . $value;
        //     } else {
        //         $hashData = $hashData . $key . "=" . $value;
        //         $i = 1;
        //     }
        // }

        // $secureHash = hash('sha256',env('VNP_CHECKSUM') . $hashData);
        // if ($secureHash == $vnp_SecureHash) {
        //     if ($_GET['vnp_ResponseCode'] == '00') {
        //         error_log('GD Thanh cong');
        //     } else {
        //         error_log('GD Khong thanh cong');
        //     }
        // } else {
        //     error_log("Chu ky khong hop le");
        // }
    }
}
