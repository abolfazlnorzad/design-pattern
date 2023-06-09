<?php

namespace Src\Bridge\Payment;

abstract class PaymentMethod
{

    protected PaymentHandler $paymentHandler;

    /**
     * @param PaymentHandler $paymentHandler
     */
    public function __construct(PaymentHandler $paymentHandler)
    {
        $this->paymentHandler = $paymentHandler;
    }


    abstract public function startPay(Invoice $invoice);
}
