<?php

namespace App\Providers;

use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\DeliveryMethodImpl\PostFactoryImpl;
use App\Factories\Delivery\DeliveryMethodImpl\SnappFactoryImpl;
use App\Factories\Delivery\DeliveryMethodImpl\TipaxFactoryImpl;
use Illuminate\Support\ServiceProvider;

class DeliveryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DeliveryMethod::class, function ($app) {
            $deliveryMethod = request()->input('delivery_method');

            return match ($deliveryMethod) {
                'post' => $app->make(PostFactoryImpl::class),
                'snapp' => $app->make(SnappFactoryImpl::class),
                'tipax' => $app->make(TipaxFactoryImpl::class),
                default => throw new \InvalidArgumentException("Invalid delivery method: $deliveryMethod"),
            };
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
