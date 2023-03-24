<?php

namespace Src\FactoryMethod\AccountRegistry;

class SilverAccountFactory extends AccountRegistry
{
    protected function createAccount(): Account
    {
        return new SilverAccount();
    }
}
