<?php

namespace Src\FactoryMethod\AccountRegistry;


use App\Models\User;

abstract class AccountRegistry
{
    public function registerAccount(User $user , int $balance) :\Src\FactoryMethod\AccountRegistry\Models\Account
    {
        $account = $this->createAccount();
        if ($account->minBalanceDefinition() > $balance){
            throw new \Exception("موجودی کافی نیست");
        }
        $newAccount = \Src\FactoryMethod\AccountRegistry\Models\Account::query()->create([
            "interest_rate" => $account->interestRate()
        ]);
        return $newAccount;
    }

    abstract protected function createAccount(): Account;
}
