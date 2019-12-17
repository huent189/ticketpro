<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PaymentGateway\Payment;
use MService\Payment\Shared\SharedModels\Environment;
use MService\Payment\Shared\SharedModels\PartnerInfo;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(Payment::class, function ($app)
        // {
        //     return new Payment(new Environment("https://test-payment.momo.vn/gw_payment/transactionProcessor", 
        //     new PartnerInfo(env('DEV_ACCESS_KEY'), env('DEV_PARTNER_CODE'), env('DEV_SECRET_KEY')),
        //     env('DEV')));
        // });
        // $this->app->bind(Environment::class, function ($app)
        // {
        //     return new Environment("https://test-payment.momo.vn/gw_payment/transactionProcessor", 
        //                         new PartnerInfo(env('DEV_ACCESS_KEY'), env('DEV_PARTNER_CODE'), env('DEV_SECRET_KEY')),
        //                         env('DEV'));   
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
