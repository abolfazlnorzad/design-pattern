<?php

namespace Src\FactoryMethod\AccountRegistry;

class SilverAccount implements Account
{

    public function interestRate(): float
    {
       return .11;
    }

    public function minBalanceDefinition(): int
    {
        return 3000000;
    }
}
