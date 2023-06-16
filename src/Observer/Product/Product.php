<?php

namespace Src\Observer\Product;

use SplObserver;

class Product implements \SplSubject
{

    private int $price;
    private $observer;

    /**
     * @param int $price
     */
    public function __construct(int $price )
    {
        $this->price = $price;
        $this->observer = new \SplObjectStorage();
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }




    public function attach(SplObserver $observer): void
    {
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observer->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observer as $obs){
            $obs->update($this);
        }
    }

    public function changePrice(int $newPrice):void
    {
        if ($newPrice === $this->price){
            return;
        }
        $this->price = $newPrice;
        $this->notify();
    }
}
