<?php

namespace Src\FactoryMethod\Logger;

class SlackLogFactory extends Logger
{

    protected function createLogger(): LoggerInterface
    {
        return  new SlackLog();
    }
}
