<?php

namespace Src\Adapter\PaymentProvider;

class Invoice
{
    private $amount;
    private $resnumber;

    /**
     * @return mixed
     */
    public function getResnumber()
    {
        return $this->resnumber;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }


}
