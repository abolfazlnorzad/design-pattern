<?php

namespace Src\Flyweight\DiscountGenerator;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Client
{
    private DiscountFactory $discountFactory;

    /**
     * @param DiscountFactory $discountFactory
     */
    public function __construct(DiscountFactory $discountFactory)
    {
        $this->discountFactory = $discountFactory;
    }

    public function createDiscounts()
    {
        $limitRange = mt_rand(1,3);
        $maxRange = mt_rand(1000000,2000000);
        $minRange = mt_rand(10000,50000);
        $percentRange = mt_rand(10,30);
        $dateRange = Carbon::now()->addDays(array_rand([1,2,3]))->toString();
        foreach (range(1, 1000000) as $counter) {
            $this->discountFactory->createDiscount(
                Str::random(),
                0,
                $limitRange,
                $percentRange,
                $maxRange,
                $minRange,
                $dateRange
            );
        }
    }
}
