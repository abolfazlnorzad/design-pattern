<?php

namespace Src\FactoryMethod\Publisher;

class Message
{
    public function __construct(public string $title , public string $message)
    {
    }
}
