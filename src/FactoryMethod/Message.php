<?php

namespace Src\FactoryMethod;

class Message
{
    public function __construct(public string $title , public string $message)
    {
    }
}
