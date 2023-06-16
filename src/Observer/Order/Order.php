<?php

namespace Src\Observer\Order;

use SplObserver;
use Src\Observer\Order\Observes\OrderPriceObserver;

class Order implements \SplSubject
{
    private const PENDING= 1;
    private const PROCESSING= 2;
    private const READY= 3;
    private const SEND= 4;
    private const DELIVER= 5;

    private int $status;
    private \SplObjectStorage $observers;

    /**
     * @param int $status
     */
    public function __construct()
    {
        $this->status = self::PENDING;
        $this->observers = new \SplObjectStorage();
    }

    public function process()
    {
        $this->status = self::PROCESSING;
        $this->registerObserver();
    }

    public function ready()
    {
        $this->status = self::READY;
        $this->clearObserver();

    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $obs){
            $obs->update($this);
        }
    }

    private function registerObserver()
    {
        $this->attach(new OrderPriceObserver());
    }

    private function clearObserver()
    {
        foreach ($this->observers as $obs){
            $this->observers->detach($obs);
        }
    }

    public function changePrice($p)
    {
        $this->price = $p;
        $this->notify();
    }
}
