<?php

namespace Src\Bridge\Payment;
use Illuminate\Support\ServiceProvider;
use Src\Bridge\Payment\Handlers\ZarinpalHandler;
use Src\Bridge\Payment\Methods\OnlinePayment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OnlinePayment::class,function ($app){
            return new OnlinePayment(new ZarinpalHandler());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
