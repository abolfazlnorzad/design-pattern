<?php

namespace Src\Adapter\PaymentProvider;

class MellatGateway implements OnlineGateway
{

    public function startPay(Invoice $invoice): void
    {
        // TODO: Implement startPay() method.
    }

    public function verifyPay(Invoice $invoice): bool
    {
        return false;
    }
}
