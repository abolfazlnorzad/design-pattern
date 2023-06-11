<?php

namespace Src\FactoryMethod\AccountRegistry\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Src\FactoryMethod\AccountRegistry\GoldAccountFactory;
use Src\FactoryMethod\AccountRegistry\Services\AccountService;
use Src\FactoryMethod\AccountRegistry\SilverAccountFactory;

class AccountsController extends Controller
{
    public function register(Request $request)
    {
        $service = new AccountService($this->typeOfAccount($request->type));
        $service->register(Auth::user() ,$request->balance);
    }

    private function typeOfAccount(string $type)
    {
        return match ($type){
            "silver"=>new SilverAccountFactory(),
            "gold"=>new GoldAccountFactory(),
            default => new  GeneralAccountFactory()
        };
    }

}
