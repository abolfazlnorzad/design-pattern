<?php

namespace Src\Solid\OCP;

use http\Exception\InvalidArgumentException;

class GenericEncoder
{

    public function __construct(private EncoderFactory $encoderFactory)
    {
    }

    public function encode(string $format) :string
    {
      $encoder = $this->encoderFactory->createEncoder($format);
      return $encoder->encode($format);
    }
}
