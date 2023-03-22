<?php

namespace Src\Solid\Srp;

use http\Message\Body;

class Message
{


    public function __construct( private string $subject,
    private string $body,
    private string $emailAddress)
    {
    }

}
