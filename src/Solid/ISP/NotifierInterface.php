<?php

namespace Src\Solid\ISP;

interface NotifierInterface
{
    public function sendSMS();

    public function sendEmail();

    public function sendWebSocket();
}
