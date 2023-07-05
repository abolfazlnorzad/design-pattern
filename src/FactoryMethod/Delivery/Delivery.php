<?php


abstract class Devlivery {

    abstract protected function makeVehicle() :Vehicle;

    public function handle()
    {
        $v = $this->makeVehicle();
        $v->move();
    }

}