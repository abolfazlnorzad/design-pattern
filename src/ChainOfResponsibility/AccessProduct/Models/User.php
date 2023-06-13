<?php

namespace Src\ChainOfResponsibility\AccessProduct\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function isActive():bool
    {
        return  $this->attributes["is_active"];
    }
}
