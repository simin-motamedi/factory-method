<?php

namespace App\Factories\Delivery;

use App\Factories\Delivery\DTO\DeliveryResponse;

abstract class DeliveryMethod
{
    /**
     * @return DeliveryResponse
     */
    public function doDelivery(): DeliveryResponse
    {
        $delivery = $this->createDelivery();
        return $delivery->deliver();
    }

    /**
     * @return IDelivery
     */
    public abstract function createDelivery(): IDelivery;
}
