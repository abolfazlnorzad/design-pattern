<?php

namespace Src\Solid\DIP;

use http\Exception\RuntimeException;

class Auth
{
    public function __construct(private UserProviderInterface $userProvider)
    {
    }

    public function check(string $username , string $password) :bool
    {
        $res = $this->userProvider->findUser($username ,$password);
        if (!$res) {
            throw new RuntimeException("err");
        }
        return true;
    }
}
