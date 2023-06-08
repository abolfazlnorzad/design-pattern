<?php

namespace Src\Builder\ReOrderBuilder;

class Order
{
    private $customer;
    private $deliveryAddress;
    private $orderLines;
    private $totalPrice;
    private $finalPrice;
    private $status;

    /**
     * @param $customer
     * @param $deliveryAddress
     * @param $orderLines
     * @param $totalPrice
     * @param $finalPrice
     * @param $status
     */
    public function __construct($customer, $deliveryAddress, $orderLines, $totalPrice, $finalPrice, $status)
    {
        $this->customer = $customer;
        $this->deliveryAddress = $deliveryAddress;
        $this->orderLines = $orderLines;
        $this->totalPrice = $totalPrice;
        $this->finalPrice = $finalPrice;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }




}
