<?php

namespace Src\ChainOfResponsibility\Loan;

class LoanRequest
{
    private $amount;
    private $userId;
    private $repaymentDuration;

    /**
     * @param $amount
     * @param $userId
     * @param $repaymentDuration
     */
    public function __construct($amount, $userId, $repaymentDuration)
    {
        $this->amount = $amount;
        $this->userId = $userId;
        $this->repaymentDuration = $repaymentDuration;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getRepaymentDuration()
    {
        return $this->repaymentDuration;
    }




}
