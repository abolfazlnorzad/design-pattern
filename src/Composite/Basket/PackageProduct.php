<?php

namespace Src\Composite\Basket;

class PackageProduct implements ProductItem
{

    private $products = [];

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }


    public function price(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price();
        }
        return $total;
    }
}
