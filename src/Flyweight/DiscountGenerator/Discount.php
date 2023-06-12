<?php

namespace Src\Flyweight\DiscountGenerator;

class Discount
{
    private string $code;
    private int $userId;
    private DiscountConstraint $constraint;

    /**
     * @param string $code
     * @param int $userId
     * @param DiscountConstraint $constraint
     */
    public function __construct(string $code, int $userId, DiscountConstraint $constraint)
    {
        $this->code = $code;
        $this->userId = $userId;
        $this->constraint = $constraint;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return DiscountConstraint
     */
    public function getConstraint(): DiscountConstraint
    {
        return $this->constraint;
    }



}
