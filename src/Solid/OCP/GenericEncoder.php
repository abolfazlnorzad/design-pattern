<?php

namespace Src\Solid\OCP;

use http\Exception\InvalidArgumentException;

class GenericEncoder
{
    public function encode(string $format) :string
    {
        if ($format == 'json'){
            return (new JSONEncoder())->$this->encode($format);
        }elseif ($format == 'xml'){
            return (new XMLEncoder())->encode($format);
        }else{
            throw new InvalidArgumentException("the format is not valid .");
        }
    }
}
