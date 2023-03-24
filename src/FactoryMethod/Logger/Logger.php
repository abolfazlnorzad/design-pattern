<?php

namespace Src\FactoryMethod\Logger;

abstract class Logger
{
    public function log(LogMessage $logMessage)
    {
        $logger = $this->createLogger();
        $logger->log($logMessage);
    }

    abstract protected function createLogger() :LoggerInterface;
}
