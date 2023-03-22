<?php

namespace Src\Solid\DIP;

interface UserProviderInterface
{
    public function findUser(string $username , string $password):bool;
}
