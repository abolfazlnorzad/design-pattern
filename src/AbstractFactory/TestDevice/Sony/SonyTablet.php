<?php

namespace Src\AbstractFactory\TestDevice\Sony;

use Src\AbstractFactory\TestDevice\Tablet;

class SonyTablet implements Tablet
{
    public function turnOn()
    {
        echo"sony-smartPhone-turnOn";
    }

}
