<?php

namespace Src\AbstractFactory\TestDevice\Sony;

use Src\AbstractFactory\TestDevice\DeviceFactory;
use Src\AbstractFactory\TestDevice\SmartPhone;
use Src\AbstractFactory\TestDevice\Tablet;

class SonyDeviceFactory implements DeviceFactory
{

    public function createSmartPhone(): SmartPhone
    {
        return new SonySmartPhone();
    }

    public function createTablet(): Tablet
    {
        return new SonyTablet();
    }
}
