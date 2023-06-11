<?php

namespace Src\Facade\Order;

class OrderService
{
    private QuantityService $quantityService;
    private DiscountService $discountService;

    /**
     * @param QuantityService $quantityService
     * @param DiscountService $discountService
     */
    public function __construct(QuantityService $quantityService, DiscountService $discountService)
    {
        $this->quantityService = $quantityService;
        $this->discountService = $discountService;
    }


    public function register()
    {
        // check quantity
        $res =$this->quantityService->isExist();

        $discount = '';
        // check & apply discount
        $amount = $this->discountService->apply($discount);

        // register order
        $order = Order::create(1,$discount,$amount);
    }
}
