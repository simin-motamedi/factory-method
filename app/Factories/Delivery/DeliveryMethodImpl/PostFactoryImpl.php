<?php

namespace App\Factories\Delivery\DeliveryMethodImpl;

use App\Factories\Delivery\DeliveryImpl\PostDelivery;
use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\IDelivery;
class PostFactoryImpl extends DeliveryMethod
{
    /**
     * @return IDelivery
     */
    public function createDelivery(): IDelivery
    {
        return new PostDelivery();
    }
}
