<?php

namespace Src\Adapter\PaymentProvider;

class SamanGateway
{
    public function pay(int $amount): string
    {
        return "pay link";
    }

    public function verify(string $resnumber): bool
    {

    }
}
