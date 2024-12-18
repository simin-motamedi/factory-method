<?php

namespace App\Factories\Delivery\DeliveryMethodImpl;

use App\Factories\Delivery\DeliveryImpl\SnappDelivery;
use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\IDelivery;

class SnappFactoryImpl extends DeliveryMethod
{
    /**
     * @return IDelivery
     */
    public function createDelivery(): IDelivery
    {
        return new SnappDelivery();
    }
}
