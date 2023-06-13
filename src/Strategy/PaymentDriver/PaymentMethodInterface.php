<?php

namespace Src\Strategy\PaymentDriver;

use Src\Strategy\PaymentDriver\Models\Order;

interface PaymentMethodInterface
{
    public function startPay(Order $order);
}
