<?php

namespace Src\TellDonotAsk\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function changeUserWallet($amount): bool|int
    {
        return $this->increment("wallet" , $this->wallet + $amount);
    }

}
