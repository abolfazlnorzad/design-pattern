<?php

namespace Src\Adapter\PaymentProvider;

class SamanAdapter implements OnlineGateway
{

    private SamanGateway $samanGateway;

    /**
     * @param SamanGateway $samanGateway
     */
    public function __construct(SamanGateway $samanGateway)
    {
        $this->samanGateway = $samanGateway;
    }

    public function startPay(Invoice $invoice): void
    {
        $link = $this->samanGateway->pay($invoice->getAmount());
    }

    public function verifyPay(Invoice $invoice): bool
    {
        return $this->samanGateway->verify($invoice->getResnumber());
    }
}
