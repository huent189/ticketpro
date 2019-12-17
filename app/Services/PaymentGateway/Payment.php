<?php


namespace App\Services\PaymentGateway;
use Illuminate\Support\Facades\URL;
use MService\Payment\AllInOne\Processors\CaptureIPN;
use MService\Payment\AllInOne\Processors\CaptureMoMo;
use MService\Payment\Shared\SharedModels\Environment;
use MService\Payment\Shared\SharedModels\PartnerInfo;
class Payment
{
    protected $env;
    public function __construct() {
        $this->env = new Environment(env('DEV_MOMO_ENDPOINT'), 
            new PartnerInfo(env('DEV_ACCESS_KEY'), env('DEV_PARTNER_CODE'), env('DEV_SECRET_KEY')),
            env('DEV'));
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