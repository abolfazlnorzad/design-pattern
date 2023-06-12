<?php

namespace Src\Flyweight\DiscountGenerator;

class DiscountFactory
{
    private $discounts =[];
    private $constraints=[];

    /**
     * @return array
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @return array
     */
    public function getConstraints(): array
    {
        return $this->constraints;
    }




    public function createDiscount(string $code, int $userId , int $limit , int $percent
        , int $maxAmount , int $minAmount , string $expireAt): Discount
    {
        $constraint = $this->createConstraint($limit ,$percent , $maxAmount , $minAmount , $expireAt);
        $discount = new Discount($code, $userId,$constraint);
        $this->discounts[]=$discount;
        return $discount;
    }

    private function createConstraint(int $limit , int $percent, int $maxAmount , int $minAmount , string $expireAt)
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->constraints[$key])){
            $this->constraints[$key] = new DiscountConstraint($maxAmount,$minAmount,$limit,$percent,$expireAt);
        }
        return $this->constraints[$key];
    }

    private function createKey(array $data): string
    {
        ksort($data);
        return md5(implode('_',$data));
    }
}
