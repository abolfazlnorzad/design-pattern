<?php

namespace Src\Strategy\Delivery;

use Src\Strategy\Delivery\Models\Order;

interface DeliveryMethodInterface
{
    public function price(Order $order);

    public function deliver(Order $order);
}
