<?php

namespace Src\Facade\Order;

use http\Exception\RuntimeException;

class DiscountService
{
    private function check(string $code): bool
    {
        return true;
    }

    public function apply(string $code): int
    {
        if ($this->check($code)){
            return 100;
        }else{
            throw new RuntimeException("'");
        }
    }
}
