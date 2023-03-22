<?php

namespace Src\Solid\OCP;

use http\Exception\InvalidArgumentException;

class EncoderFactory implements EncoderFactoryInterface , EncoderFactoryConfigInterface
{
    public $factories = [];
    public function addFactory(string $format, callable $factory): void
    {
        $this->factories[$format]= $factory();
    }

    public function createEncoder(string $format) :EncoderInterface
    {
        if (! isset($this->factories[$format])){
            throw new InvalidArgumentException("format is not valid");
        }

        $factory = $this->factories[$format];
        return $factory();

    }


}
