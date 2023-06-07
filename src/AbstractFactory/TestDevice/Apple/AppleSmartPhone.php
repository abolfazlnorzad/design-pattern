<?php

namespace Src\AbstractFactory\TestDevice\Apple;

use Src\AbstractFactory\TestDevice\SmartPhone;

class AppleSmartPhone implements SmartPhone
{

    public function turnOn()
    {
       echo "apple - smartPhone - turnOn";
    }

    public function ring()
    {
        echo "apple - smartPhone - ring";
    }
}
