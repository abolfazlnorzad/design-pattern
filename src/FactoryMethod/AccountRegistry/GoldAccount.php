<?php

namespace Src\FactoryMethod\AccountRegistry;

class GoldAccount implements Account
{

    public function interestRate(): float
    {
        return .33;
    }

    public function minBalanceDefinition(): int
    {
        return 7000000;
    }
}
