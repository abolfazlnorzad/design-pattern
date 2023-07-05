<?php


class BikeDelivery extends Devlivery{
    protected function makeVehicle() :Vehicle
    {
        return  new Bike();
    }
}