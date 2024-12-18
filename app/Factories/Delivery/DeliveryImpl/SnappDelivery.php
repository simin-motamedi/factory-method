<?php

namespace App\Factories\Delivery\DeliveryImpl;

use App\Factories\Delivery\DTO\DeliveryResponse;
use App\Factories\Delivery\IDelivery;
use Random\RandomException;

class SnappDelivery implements IDelivery
{
    /**
     * @return DeliveryResponse
     * @throws RandomException
     */
    public function deliver(): DeliveryResponse
    {
        $cost = $this->calculateCost(10);
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
        return $distance * 5000;
    }

    /**
     * @param int $distance
     * @return int
     */
    public function estimateDeliveryTime(int $distance): int
    {
        return $distance * 5;
    }

    /**
     * @return string
     * @throws RandomException
     */
    public function generateTrackingId(): string
    {
        return 'SN-' . strtoupper(bin2hex(random_bytes(4)));
    }
}
