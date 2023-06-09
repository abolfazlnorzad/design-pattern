<?php

namespace Src\Bridge\Payment;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
