<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\Publisher\InstagramPublisherFactory;
use Src\FactoryMethod\Publisher\MessagePublisher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(MessagePublisher::class,InstagramPublisherFactory::class);
    }
}
