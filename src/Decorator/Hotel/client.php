<?php

class Client {

    public function reserveRoom()
    {
        $simpleRoom = new SimpleRoom();
        $wifi = new WiFiDecorator($simpleRoom);
        $breakfast = new BreakfastDecorator($wifi);
        return $breakfast->getPrice();
    }
}