<?php

namespace Src\FactoryMethod\Logger;

interface LoggerInterface
{
    public function log(LogMessage $loggerMessage);
}
