<?php

namespace Src\Strategy\PaymentDriver;

use Src\Strategy\PaymentDriver\Models\Order;

class PaymentService
{
    private PaymentMethodInterface $paymentMethod;

    /**
     * @param PaymentMethodInterface $paymentMethod
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function doPay(Order $order)
    {
        $this->paymentMethod->startPay($order);
    }
}
