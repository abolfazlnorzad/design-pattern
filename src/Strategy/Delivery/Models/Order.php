<?php

namespace Src\Strategy\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    private $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }


}
