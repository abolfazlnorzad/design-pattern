<?php

namespace Src\Composite\Basket;

class Basket
{
    private $items = [];

    public function add(ProductItem $productItem)
    {
        $this->items[] = $productItem;
    }

    public function totalPrice(): int
    {
        $total = 0;
        foreach ($this->items as $product) {
            $total += $product->price();
        }
        return $total;
    }
}
