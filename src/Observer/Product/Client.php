<?php

namespace Src\Observer\Product;

use Src\Observer\Product\Observers\ProductOfferObservers;

class Client
{
    public function updatePrice()
    {
        $p = new Product(100);
        $p->attach(new ProductOfferObservers());
        $p->changePrice(200);

    }
}
