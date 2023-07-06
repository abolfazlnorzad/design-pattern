<?php

class WiFiDecorator extends BaseDecorator {


    public function getPrice() :int
    {
        return parent::getPrice() + 10;
    }

    public function getDescription(): string
    {
       return parent::getDescription() + " + wifi"; 
    }

}