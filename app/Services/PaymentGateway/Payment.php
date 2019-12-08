<?php


namespace App\Services\PaymentGateway;
use Illuminate\Support\Facades\URL;
use MService\Payment\AllInOne\Processors\CaptureIPN;
use MService\Payment\AllInOne\Processors\CaptureMoMo;
use MService\Payment\Shared\SharedModels\Environment;

class Payment
{
    protected $env;
    public function __construct(Environment $e) {
        $this->env = $e;
    }
    public function purchase($bookingId, $orderInfo, string $amount, $clientIp)
    {
        $requestId = rand(100, 999999999);
        $notifyURL = URL::to("/checkPayment");
        $returnURL = URL::to("/booking/".strval($bookingId)."#complete");
        return CaptureMoMo::process($this->env,$bookingId, $orderInfo, $amount,'', $requestId, 
                        $notifyURL, $returnURL);
        
    }

    public function receiveIPN(string $rawPostData)
    {
        return CaptureIPN::process($this->env, $rawPostData);
    }

}