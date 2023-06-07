<?php

namespace Src\AbstractFactory\TestDevice\Sony;

use Src\AbstractFactory\TestDevice\SmartPhone;

class SonySmartPhone implements SmartPhone
{

    public function turnOn()
    {
        echo"sony-smartPhone-turnOn";
    }

    public function ring()
    {
        echo"sony-smartPhone-ring";
    }
}
