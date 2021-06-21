<?php

namespace App\Providers;

use App\Interfaces\SubscriptionServiceInterface;
use App\Services\SubscriptionService;
use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            SubscriptionServiceInterface::class,
            SubscriptionService::class
        );
    }
}
