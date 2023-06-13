<?php

namespace Src\ChainOfResponsibility\Loan\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function loanCountInThisYear(): int
    {
        return 1;
    }

    public function userCanGetLoan(): bool
    {
        return false;
    }
}
