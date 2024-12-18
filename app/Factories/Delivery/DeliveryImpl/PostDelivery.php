<?php

namespace App\Factories\Delivery\DeliveryImpl;

use App\Factories\Delivery\DTO\DeliveryResponse;
use App\Factories\Delivery\IDelivery;

class PostDelivery implements IDelivery
{
    /**
     * @return DeliveryResponse
     */
    public function deliver(): DeliveryResponse
    {
        $cost = $this->calculateCost(2, 500);
        $time = $this->estimateDeliveryTime(0);
        $trackingId = $this->generateTrackingId();

        return DeliveryResponse::Builder([
            'deliveryType' => class_basename($this),
            'cost' => $cost,
            'estimatedTime' => $time,
            'trackingId' => $trackingId
        ]);
    }

    /**
     * @param int $distance
     * @param int|null $weight
     * @param int|null $numPackages
     * @return int
     */
    public function calculateCost(int $distance, ?int $weight = null, ?int $numPackages = null): int
    {
        return $weight * 500;
    }

    /**
     * @param int $distance
     * @return int
     */
    public function estimateDeliveryTime(int $distance): int
    {
        return rand(3, 7);
    }

    public function generateTrackingId(): string
    {
        return 'POST-' . strtoupper(bin2hex(random_bytes(4)));
    }
}
