<?php

namespace App\Factories\Delivery\DeliveryMethodImpl;

use App\Factories\Delivery\DeliveryImpl\TipaxDelivery;
use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\IDelivery;

class TipaxFactoryImpl extends DeliveryMethod
{
    /**
     * @return IDelivery
     */
    public function createDelivery(): IDelivery
    {
        return new TipaxDelivery();
    }
}
