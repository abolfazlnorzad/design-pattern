<?php

namespace Src\FactoryMethod\AccountRegistry;

class GoldAccountFactory extends AccountRegistry
{

    protected function createAccount(): Account
    {
        return new GoldAccount();
    }
}
