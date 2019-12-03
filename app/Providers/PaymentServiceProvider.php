<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Services\PaymentGateway\Payment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Payment::class, function ($app)
        {
            return new Payment();
        });
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
