<?php

namespace App\Http\Controllers\Delivery;

use App\Factories\Delivery\DeliveryMethod;
use App\Factories\Delivery\DTO\DeliveryResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryRequest;
use Illuminate\Http\JsonResponse;
use function MongoDB\BSON\toJSON;

class DeliveryController extends Controller
{
    protected DeliveryMethod $deliveryMethod;

    public function __construct(DeliveryMethod $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * @param DeliveryRequest $request
     * @return JsonResponse
     */
    public function __invoke(DeliveryRequest $request): JsonResponse
    {
        $res = $this->deliveryMethod->doDelivery();
        return response()->json($res);
    }
}
