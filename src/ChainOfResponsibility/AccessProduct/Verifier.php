<?php

namespace Src\ChainOfResponsibility\AccessProduct;

use Src\ChainOfResponsibility\AccessProduct\Models\Product;
use Src\ChainOfResponsibility\AccessProduct\Models\User;

abstract class Verifier
{
    public function __construct(private ?Verifier $verifier=null)
    {
    }

    public function verify(User $user, Product $product): bool
    {
        if (!$this->verifier)
            return true;
        return $this->verifier->verify($user, $product);
    }
}
