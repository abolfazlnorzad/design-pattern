<?php

class CarDelivery extends Devlivery{
    protected function makeVehicle() :Vehicle
    {
        return new Car();
    }
}