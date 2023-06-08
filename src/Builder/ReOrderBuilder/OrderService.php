<?php

namespace Src\Builder\ReOrderBuilder;

class OrderService
{

    public function newOrder(NewOrderData $orderData)
    {
        $newOrder = OrderBuilder::forge()
            ->withCustomer($orderData->customer)
            ->withDeliveryAddress($orderData->address)
            ->withStatus('pending')->build();
    }

    public function reOrder(Order $order)
    {
        $order = OrderBuilder::forge($order)->withFinalPrice(1000)->build();
    }
}
