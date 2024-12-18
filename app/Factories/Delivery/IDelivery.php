<?php

namespace App\Factories\Delivery;

use App\Factories\Delivery\DTO\DeliveryResponse;

interface IDelivery
{
    public function deliver(): DeliveryResponse;

    /**
     * Calculate the delivery cost.
     * @param int $distance
     * @param int|null $weight
     * @param int|null $numPackages
     * @return int
     */
    public function calculateCost(int $distance, ?int $weight = null, ?int $numPackages = null): int;

    /**
     * Estimate delivery time.
     * @param int $distance
     * @return int
     */
    public function estimateDeliveryTime(int $distance): int;

    /**
     * Generate a tracking ID.
     * @return string
     */
    public function generateTrackingId(): string;
}
