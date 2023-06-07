<?php

namespace Src\AbstractFactory\TestDevice\Apple;

use Src\AbstractFactory\TestDevice\Tablet;

class AppleTablet implements Tablet
{
    public function turnOn()
    {
        echo "apple - tablet - turnOn";
    }
}
