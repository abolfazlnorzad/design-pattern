<?php

namespace Src\AbstractFactory\TestDevice\Apple;

use Src\AbstractFactory\TestDevice\DeviceFactory;
use Src\AbstractFactory\TestDevice\SmartPhone;
use Src\AbstractFactory\TestDevice\Tablet;

class AppleDeviceFactory implements DeviceFactory
{


    public function createSmartPhone(): SmartPhone
    {
        return new AppleSmartPhone();
    }

    public function createTablet(): Tablet
    {
       return new AppleTablet();
    }
}
