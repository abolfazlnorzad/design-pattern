<?php

class BreakfastDecorator extends BaseDecorator {
    public function getPrice() :int
    {
        return parent::getPrice() + 20;
    }

    public function getDescription(): string
    {
        return parent::getDescription() + " + Breakfast";
    }
}