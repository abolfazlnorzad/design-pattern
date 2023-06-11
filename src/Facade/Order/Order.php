<?php

namespace Src\Facade\Order;

class Order
{
    private $userId;
    private $discount;
    private $amount;

    /**
     * @param $userId
     * @param $discount
     * @param $amount
     */
    private function __construct($userId, $discount, $amount)
    {
        $this->userId = $userId;
        $this->discount = $discount;
        $this->amount = $amount;
    }

    public static function create($userId, $discount, $amount) :Order
    {
        return new self($userId, $discount, $amount);
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }



}
