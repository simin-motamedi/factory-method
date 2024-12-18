<?php

namespace App\Providers;

use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\DeliveryMethodImpl\PostFactoryImpl;
use App\Factories\Delivery\DeliveryMethodImpl\SnappFactoryImpl;
use App\Factories\Delivery\DeliveryMethodImpl\TipaxFactoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * @return void
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
        //
    }
}
