<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Booking;
use App\BookingDetail;
use App\Enums\BookingStatus;
use Illuminate\Http\Request;
use App\Services\PaymentGateway\Payment;
use Carbon\Carbon;
use App\Event;
use App\Events\OrderCompletedEvent;
use App\ReservedTicket;
use App\TicketClass;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
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
            // return Redirect::back()->withErrors(['msg_alert', 'No tickets selected']);
            
            return response()->json([
                'status' => 'error',
                'message' => 'No tickets selected',
                'new_token' => csrf_token(),
            ], 400);
        }
        $tickets = $request->get("tickets");
        ReservedTicket::where('session_id', session()->getId())->delete();
        $order_total = 0;
        $qty_total = 0;
        $quantity_available_validation_rules = [];
        $validator_fail = false;
        foreach($tickets as $ticket_ordered){
            $current_quantity = $ticket_ordered["quantity"];
            if($current_quantity < 1){
                continue;
            }
            $ticket = TicketClass::where('eventId', $eventId)->where('id', $ticket_ordered["ticket-class"])->first();
            if(!$ticket){
                // return Redirect::back()->withErrors(['msg_alert', 'Selected invalid ticket class']);
                
                return response()->json([
                    'status' => 'error',
                    'message' => 'Selected invalid ticket class ',
                    'new_token' => csrf_token(),
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
            $qty_total = $qty_total + $current_quantity;
            $ticket_details[] = [
                'ticket_id' => $ticket->id,
                'type' => $ticket->type,
                'quantity' => $current_quantity,
                'total_price' => $current_quantity * $ticket->price
            ];  
        }
        if($validator_fail){
            // return Redirect::back()->withErrors(['msg_alert', $validator_fail_messages]);
            
            return response()->json([
                'status'  => 'error',
                'message' => $validator_fail_messages,
                'new_token' => csrf_token(),
            ], 400);
        }
        if(empty($ticket_details)){
            // return Redirect::back()->withErrors(['msg_alert', 'No valid ticket selected']);
            
            return response()->json([
                'status'  => 'error',
                'message' => 'No valid ticket selected',
                'new_token' => csrf_token(),
            ], 400);
        }
        Session::put('ticket_order_'. $eventId, [
            'event_id' => $eventId,
            'tickets' => $ticket_details,
            'expires' => $expire_time,
            'reserved_tickets_id' => $reservedTickets->id,
            'order_total' => $order_total,
            'quantity_total' => $qty_total,
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
        return redirect()->route('choose-ticket', ['eventId' => $eventId])->withErrors('msg_alert','phiên đặt vé của bạn đã kết thúc');
    }
    public function validateOrder(Request $request, $eventId)
    {
        $order_session = session()->get('ticket_order_' . $eventId);
        if (!$order_session) {
            return redirect()->route('choose-ticket', ['eventId' => $eventId])->withErrors('msg_alert','phiên đặt vé của bạn đã kết thúc');
            // return response()->json([
            //     'status'      => 'error',
            //     'message'     => 'Phiên làm việc đã kết thúc.',
            //     'redirectUrl' => route('choose-ticket', [
            //         'eventId' => $eventId,
            //     ])
            //     ], 440);
        }
        if(Carbon::now()->gt($order_session['expires'])){
            return redirect()->route('choose-ticket', ['eventId' => $eventId])->withErrors('msg_alert','Đã hết thời gian đặt vé');
            // return response()->json([
            //     'status'      => 'error',
            //     'message'     => 'Đã hết thời gian đặt vé',
            //     'redirectUrl' => route('choose-ticket', [
            //         'eventId' => $eventId,
            //     ])
            //     ], 440);
        }
        $event = Event::findOrFail($eventId);
        $order = new Booking();
        $validator = Validator::make($request->all(), $order->rules, $order->fail_messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('msg_alert',$validator->errors()->all());
            // return response()->json([
            //     'status'   => 'error',
            //     'messages' => $validator->errors()->all(),
            // ]);
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
            $order->totalQuantity = $order_session['quantity_total'];
            $order->eventId = $eventId;
            if(Auth::user()){
                $order->userId = Auth::user()->id;
            }
            $order->save();
            foreach ($order_session['tickets'] as $ticket) {
                $order->bookingDetails()->save(new BookingDetail(["bookingId" => $order->id, 
                                                    "ticketClassId" => $ticket["ticket_id"], 
                                                    'quantity' => $ticket['quantity']]));
            }
            //TODO: extend reserved table
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('choose-ticket', ['eventId' => $eventId])->withErrors('msg_alert','Có lỗi xảy ra trong quá trình mua vé'.$e->getMessage());
            // return response()->json([
            //     'status' => 'error',
            //     'message' => $e->getMessage(), 
            // ]);
        }
        $payment_response =  $this->payment->purchase($eventId, $order->transactionId, "thanh toan ve su kien", strval($order->totalPrice));
        if((!$payment_response) && $payment_response->getErrorCode() != 0){
            return redirect()->route('choose-ticket', ['eventId' => $eventId])->withErrors('msg_alert','Có lỗi xảy ra trong quá trình mua vé'.$payment_response->getMessage());
            // return response()->json([
            //     'status'      => 'error',
            //     'message' => $payment_response->getMessage(),
            // ]);    
        }
        return redirect($payment_response->getPayUrl());
    }   
    public function getIPN(Request $request)
    {
        //TODO: thanh toan thanh cong
        // error_log('ai do goi tao ne');
        // error_log($request->getContent());
        $ipn = $this->payment->receiveIPN($request->getContent());
        DB::beginTransaction();
        try {
            if($ipn && $ipn->getErrorCode() == 0){
                //TODO: thanh toan thanh cong
                $booking = Booking::where('transactionId', $ipn->getOrderId())->first();
                $booking->status = BookingStatus::Paid();
                $booking->pdfTicketPath = 'ticket_pdf/'.$booking->id.Str::random(10).'.pdf';
                $booking->save();
                foreach ($booking->bookingDetails as $item) {
                    for ($i=0; $i < $item->quantity; $i++) { 
                        $booking->attendees()->save(new Attendee(['firstName' => $booking->firstName,
                                            'lastName'=> $booking->lastName, 'email' => $booking->email,
                                            'eventId' => $booking->eventId, 'ticketClassId' => $item->ticketClassId]));
                    }
                    TicketClass::find($item->ticketClassId)->decrement('numberAvailable', $item->quantity);
                }
                DB::commit();
                event(new OrderCompletedEvent($booking));
                // error_log('update db thanh cong');
            } else {
                //TODO: thanh toan khong thanh cong
                $booking->status = BookingStatus::Canceled();
                $booking->save();
                DB::commit();
                // error_log('update db khong thanh cong');
                // error_log(print_r($ipn));
            }
        } catch (Exception $e) {
            DB::rollback();
            error_log($e->getMessage());
        }
        
    }
    public function completePayment(Request $request, $eventId)
    {
        // dd($request);
        // TODO: thanh toasn khong thanh cong
        $event = Event::find($eventId);
        $booking = Booking::where('transactionId', $request->get('orderId'))->first();
        if($event){
            if($request->get('errorCode') === 0){
                return view('front-end.modules.complete')->with('event', $event)->with('booking', $booking);
            } else {
                return "Thanh toán không thành công. Lỗi: ".$request->get('localMessage');
            }
            
        }
        return "Xin loi su kien nay khong ton tai";
    }
}
