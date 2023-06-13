<?php

namespace Src\ChainOfResponsibility\AccessProduct;

use Src\ChainOfResponsibility\AccessProduct\Models\Product;
use Src\ChainOfResponsibility\AccessProduct\Models\User;
use Src\ChainOfResponsibility\AccessProduct\Verifiers\ActiveSubscriptionVerifier;
use Src\ChainOfResponsibility\AccessProduct\Verifiers\ActiveUserVerifier;
use Src\ChainOfResponsibility\AccessProduct\Verifiers\ExpirationSubscriptionVerifier;
use Src\ChainOfResponsibility\AccessProduct\Verifiers\SubscriptionVerifier;

class Access
{
    public function verify(User $user, Product $product)
    {

    }

    private function buildVerifier()
    {
        $actVerifier = new ActiveSubscriptionVerifier();
        $expVerifier = new ExpirationSubscriptionVerifier($actVerifier);
        $subVerifier = new SubscriptionVerifier($expVerifier);
        return new ActiveUserVerifier($subVerifier);
    }
}
