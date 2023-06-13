<?php

namespace Src\ChainOfResponsibility\AccessProduct\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public static function findByUserIDAndProductID(int $userID,int $productID):Subscription
    {
        return  self::query()->where("user_id" , $userID)
            ->where("product_id" , $productID)->first();
    }

    public function checkIsExpired():bool
    {
        return Carbon::now()->gt($this->attributes['expire_at']);
    }

    public function isActive():bool
    {
        return  $this->attributes["is_active"];
    }
}
