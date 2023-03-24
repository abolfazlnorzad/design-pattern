<?php

namespace Src\FactoryMethod\AccountRegistry\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Src\FactoryMethod\AccountRegistry\AccountRegistry;

class AccountService
{
    public function __construct(private AccountRegistry $accountRegistry)
    {
    }

    public function register(User $user,int $balance)
    {
       return $this->accountRegistry->registerAccount($user , $balance);
    }
}
