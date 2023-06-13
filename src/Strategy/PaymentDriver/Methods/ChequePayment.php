<?php

namespace Src\Strategy\PaymentDriver\Methods;

use Src\Strategy\PaymentDriver\Models\Order;
use Src\Strategy\PaymentDriver\PaymentMethodInterface;

class ChequePayment implements PaymentMethodInterface
{

    public function startPay(Order $order)
    {
        // TODO: Implement startPay() method.
    }
}
