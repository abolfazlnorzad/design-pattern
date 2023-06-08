<?php

namespace Src\Adapter\PaymentProvider;

interface OnlineGateway
{
    public function startPay(Invoice $invoice) :void;

    public function verifyPay(Invoice $invoice) :bool;
}
