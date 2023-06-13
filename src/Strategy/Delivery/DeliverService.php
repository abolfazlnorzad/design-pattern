<?php

namespace Src\Strategy\Delivery;

use Src\Strategy\Delivery\Models\Order;

class DeliverService
{
    private DeliveryMethodInterface $deliveryMethod;

    /**
     * @param DeliveryMethodInterface $deliveryMethod
     */
    public function __construct(DeliveryMethodInterface $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function deliver(Order $order)
    {
        $price = $this->deliveryMethod->price($order);
        $this->deliveryMethod->deliver($order);

    }


}
