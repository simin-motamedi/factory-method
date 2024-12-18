<?php

namespace App\Factories\Delivery\DeliveryImpl;

use App\Factories\Delivery\DTO\DeliveryResponse;
use App\Factories\Delivery\IDelivery;
use Random\RandomException;

class TipaxDelivery implements IDelivery
{
    /**
     * @return DeliveryResponse
     * @throws RandomException
     */
    public function deliver(): DeliveryResponse
    {
        $cost = $this->calculateCost(10, null, 2);
        $time = $this->estimateDeliveryTime(10);
        $trackingId = $this->generateTrackingId();

        return DeliveryResponse::Builder([
            'deliveryType' => class_basename($this),
            'cost' => $cost,
            'estimatedTime' => $time,
            'trackingId' => $trackingId
        ]);
    }

    public function calculateCost(int $distance, ?int $weight = null, ?int $numPackages = null): int
    {
        return $weight * 500;
    }

    public function estimateDeliveryTime(int $distance): int
    {
        return ceil($distance / 20) * 3;
    }

    /**
     * @throws RandomException
     */
    public function generateTrackingId(): string
    {
        return 'TIPAX-' . strtoupper(bin2hex(random_bytes(4)));
    }
}
