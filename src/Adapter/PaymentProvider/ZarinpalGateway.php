<?php

namespace Src\Adapter\PaymentProvider;

class ZarinpalGateway implements OnlineGateway
{

    public function startPay(Invoice $invoice): void
    {
        // TODO: Implement startPay() method.
    }

    public function verifyPay(Invoice $invoice): bool
    {
        // TODO: Implement verifyPay() method.
        return true;
    }
}
