<?php

namespace Src\Bridge\Payment\Methods;

use Src\Bridge\Payment\Invoice;
use Src\Bridge\Payment\PaymentMethod;

class CashPayment extends PaymentMethod
{

    public function startPay(Invoice $invoice)
    {
        // do something
        $this->paymentHandler->pay($invoice);
    }
}
