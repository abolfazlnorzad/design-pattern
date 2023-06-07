<?php

namespace Src\FactoryMethod\Logger;

class SlackLog implements LoggerInterface
{
    public function log(LogMessage $loggerMessage)
    {
       return $loggerMessage->content;
    }
}
