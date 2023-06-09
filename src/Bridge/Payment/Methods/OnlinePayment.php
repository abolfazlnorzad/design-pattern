<?php

namespace Src\Bridge\Payment\Methods;

use Src\Bridge\Payment\Invoice;
use Src\Bridge\Payment\PaymentHandler;
use Src\Bridge\Payment\PaymentMethod;

class OnlinePayment extends PaymentMethod
{

    public function __construct(PaymentHandler $paymentHandler)
    {
        parent::__construct($paymentHandler);
    }

    public function startPay(Invoice $invoice)
    {
        // do something
        $this->paymentHandler->pay($invoice);
    }
}
