<?php

namespace Src\Solid\Srp;

interface MailMailerInterface
{
    public function send(Message $message);
}
