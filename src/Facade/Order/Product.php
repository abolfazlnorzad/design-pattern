<?php

namespace Src\Facade\Order;

class Product
{
    private $price;
    private $title;

    /**
     * @param $price
     * @param $title
     */
    public function __construct($price, $title)
    {
        $this->price = $price;
        $this->title = $title;
    }

}
