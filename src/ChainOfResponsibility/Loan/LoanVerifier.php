<?php

namespace Src\ChainOfResponsibility\Loan;

use Src\ChainOfResponsibility\Loan\Models\User;

abstract class LoanVerifier
{

    public function __construct(private ?LoanVerifier $next = null)
    {
    }

    public function verify(LoanRequest $request) :bool
    {
        if (! $this->next)
            return true;
        return  $this->next->verify($request);
    }
}
