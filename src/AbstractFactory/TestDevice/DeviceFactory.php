<?php

namespace Src\AbstractFactory\TestDevice;

interface DeviceFactory
{
    public function createSmartPhone() :SmartPhone;
    public function createTablet() :Tablet;
}
