<?php

namespace Src\Solid\DIP;

class UserProvider implements UserProviderInterface
{
    public function __construct(private Connection $connection)
    {
    }

    public function findUser($username, $password):bool
    {
        $this->connection->query($username , $password);
        return true;
    }
}
