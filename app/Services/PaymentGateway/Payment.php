<?php

namespace App\Services\PaymentGateway;

use Illuminate\Support\Facades\URL;

class Payment
{
    public function purchase($bookingId, $orderInfo, $amount, $clientIp)
    {
        $vnp_HashSecret = env('VNP_CHECKSUM'); //Chuỗi bí mật
        $vnp_OrderType = 'topup';
        $vnp_Amount = $amount * 100;
        $vnp_Locale = 'vn';
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        //TODO : edit this
        $vnp_Returnurl = URL::to('booking/complete');
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_Amount" => $vnp_Amount,
            // "vnp_BankCode" => "NCB",
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $clientIp,
            "vnp_Locale" => $vnp_Locale,   
            "vnp_OrderInfo" => $orderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $bookingId,    
        );
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash('sha256',$vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        error_log($vnp_Url);
        return  $vnp_Url;
    }

    public function receiveIPN()
    {
        
    }

}