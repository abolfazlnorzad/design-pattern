<?php

namespace Src\Flyweight\DiscountGenerator;

class DiscountConstraint
{
    private int $maxAmount , $minAmount ,$limit,$percent;
    private string $expireAt;

    /**
     * @param int $maxAmount
     * @param int $minAmount
     * @param int $limit
     * @param int $percent
     * @param string $expireAt
     */
    public function __construct(int $maxAmount, int $minAmount, int $limit, int $percent, string $expireAt)
    {
        $this->maxAmount = $maxAmount;
        $this->minAmount = $minAmount;
        $this->limit = $limit;
        $this->percent = $percent;
        $this->expireAt = $expireAt;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    /**
     * @return int
     */
    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getPercent(): int
    {
        return $this->percent;
    }

    /**
     * @return string
     */
    public function getExpireAt(): string
    {
        return $this->expireAt;
    }



}
