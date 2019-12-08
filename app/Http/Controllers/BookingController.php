<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentGateway\Payment;
use Carbon\Carbon;
use App\Event;
use App\ReservedTicket;
use App\TicketClass;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    // protected $payment;
    // public function __construct(Payment $p)
    // {
    //     $this->payment = $p;
    // }
    public function showSelectTicket($eventId)      
    {
        return view('front-end.modules.chooseTicket');
        
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
        // $validation_rules = [];
        // $validation_messages = [];
        $order_total = 0;
        $quantity_available_validation_rules = [];
        $validator_fail = false;
        foreach($tickets as $ticket_ordered){
            $current_quantity = $ticket_ordered["quantity"];
            if($current_quantity < 1){
                continue;
            }
            $ticket = TicketClass::where('eventId', $eventId)->where('type', $ticket_ordered["ticket-class"])->first();
            if(!$ticket){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Selected invalid ticket class ',
                ], 400);
            }
            $max_per_person = min($ticket->maxPerPerson, $ticket->quantity_remaining);
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
                'ticket' => $ticket->id,
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
        session()->put('ticket_order_'. $eventId, [
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
        return redirect()->route('event-checkout', [
            'eventId' => $eventId
        ]);
    }
    public function showEventCheckout(Request $request, $eventId)
    {
        $order_session = session()->get('ticket_order_' . $eventId);
        if($order_session || $order_session['expires'] < Carbon::now()){
            // TODO: alert message
            return redirect()->route('event-detail', ['eventId' => $eventId]);
        }
        $secondsToExpire = Carbon::now()->diffInSeconds($order_session['expires']);
        // TODO mockup data to view
        return view('front-end.modules.payment');
    }
    public function validateOrder(Request $request, $eventId)
    {
        if (!session()->get('ticket_order_' . $eventId)) {
            return response()->json([
                'status'      => 'error',
                'message'     => 'Phiên làm việc đã kết thúc.',
                'redirectUrl' => route('event-detail', [
                    'eventId' => $eventId,
                ])
            ]);
        }
    }   
    public function getIPN(Request $request)
    {
        error_log('fromBooking');
        error_log($request->fullUrl());
    }
    public function purchase(Request $request)
    {
        return redirect($this->payment->purchase('12345','test vn pay', 20000, $request->ip()));
    }
    public function completePayment(Request $request)
    {
        var_dump($request);
        $vnp_SecureHash = $request->vnp_SecureHash;
        // $inputData = array();
        // foreach ($_GET as $key => $value) {
        //     $inputData[$key] = $value;
        // }
        // unset($inputData['vnp_SecureHashType']);
        // unset($inputData['vnp_SecureHash']);
        // ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($request as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }

        $secureHash = hash('sha256',env('VNP_CHECKSUM') . $hashData);
        if ($secureHash == $vnp_SecureHash) {
            if ($_GET['vnp_ResponseCode'] == '00') {
                error_log('GD Thanh cong');
            } else {
                error_log('GD Khong thanh cong');
            }
        } else {
            error_log("Chu ky khong hop le");
        }
    }
}
