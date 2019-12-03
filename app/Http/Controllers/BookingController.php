<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentGateway\Payment;

class BookingController extends Controller
{
    protected $payment;
    public function __construct(Payment $p)
    {
        $this->payment = $p;
    }
    public function chooseTicket($eventId, $userId)      
    {
        return view('front-end.modules.chooseTicket');
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
