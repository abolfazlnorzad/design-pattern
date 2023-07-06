<?php

class SimpleRoom implements RoomInterface {
    public function getPrice() :int
    {
        return 70;
    }

    public function getDescription() :string
    {
        return "simple room";
    }
}