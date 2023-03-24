<?php

namespace Src\FactoryMethod\AccountRegistry;

interface Account
{
    public function interestRate() :float;

    public function minBalanceDefinition() :int;
}
