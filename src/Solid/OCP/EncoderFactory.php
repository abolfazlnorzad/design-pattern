<?php

namespace Src\Solid\OCP;

use http\Exception\InvalidArgumentException;

class EncoderFactory
{
    public function createEncoder(string $format) :EncoderInterface
    {
        if ($format == 'json'){
            $encoder = new JSONEncoder();
        }elseif ($format == 'xml'){
            $encoder = new XMLEncoder();
        }else{
            throw new InvalidArgumentException("the format is not valid .");
        }
        return $encoder;
    }
}
