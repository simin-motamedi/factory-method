<?php

namespace App\Factories\Delivery\DTO;

readonly class DeliveryResponse
{
    /**
     * DeliveryResponse constructor.
     *
     * @param string $deliveryType
     * @param int $cost
     * @param string $estimatedTime
     * @param string $trackingId
     */
    public function __construct(
        public string $deliveryType,
        public int    $cost,
        public string $estimatedTime,
        public string $trackingId
    )
    {
    }

    /**
     * @param array $props
     * @return DeliveryResponse
     */
    public static function Builder(array $props): DeliveryResponse
    {
        return new DeliveryResponse(
            $props['deliveryType'],
            $props['cost'],
            $props['estimatedTime'],
            $props['trackingId']
        );
    }
}
