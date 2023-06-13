<?php

namespace Src\Strategy\PaymentDriver\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    private int $price;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }


    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

}
