<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale('vi_VN');
        Blade::directive('price_format', function ($money) {
            return "{{number_format($money, 0, '.', '.')}}";
        });
    }
}
