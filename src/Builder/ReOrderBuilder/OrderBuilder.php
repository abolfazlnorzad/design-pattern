<?php

namespace Src\Builder\ReOrderBuilder;

class OrderBuilder
{

    private Order $order;
    private $customer;
    private $deliveryAddress;
    private $orderLines;
    private $totalPrice;
    private $finalPrice;
    private $status;

    private function __construct(?Order $order)
    {
        $this->order = $order;
    }

    public static function forge(?Order $order): OrderBuilder
    {
        return new OrderBuilder($order);
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
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

    public function withFinalPrice($finalPrice): OrderBuilder
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }

    public function withTotalPrice($totalPrice): OrderBuilder
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function withCustomer($customer): OrderBuilder
    {
        $this->customer = $customer;
        return $this;
    }

    public function withStatus($status): OrderBuilder
    {
        $this->status = $status;
        return $this;
    }

    public function withOrderLines($orderLines): OrderBuilder
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    public function withDeliveryAddress($ad): OrderBuilder
    {
        $this->deliveryAddress = $ad;
        return $this;
    }

    public function build(): Order
    {
        return new Order(
            $this->customer || $this->order->getCustomer(),
            $this->deliveryAddress || $this->order->getDeliveryAddress(),
            $this->orderLines || $this->order->getDeliveryAddress(),
            $this->totalPrice || $this->order->getTotalPrice(),
            $this->finalPrice || $this->order->getFinalPrice(),
            $this->status || $this->order->getStatus()
        );
    }
}
