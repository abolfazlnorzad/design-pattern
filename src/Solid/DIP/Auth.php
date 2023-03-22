<?php

namespace Src\Solid\DIP;

use http\Exception\RuntimeException;

class Auth
{
    public function __construct(private Connection $connection)
    {
    }

    public function check(string $username , string $password) :bool
    {
        $res = $this->connection->query($username ,$password);
        if (!$res) {
            throw new RuntimeException("err");
        }
        return true;
    }
}
