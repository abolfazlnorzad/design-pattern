<?php

namespace Src\Solid\OCP;

interface EncoderFactoryConfigInterface
{
    public function addFactory(string $format , callable $factory) :void;

}
