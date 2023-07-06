<?php

class BaseDecorator implements RoomInterface{
    public function __construct(public RoomInterface $roomInterface) {
        
    }

    public function getPrice() :int
    {
        return $this->roomInterface->getPrice();
    }

    public function getDescription() :string
    {
        return $this->roomInterface->getDescription();
    }

}