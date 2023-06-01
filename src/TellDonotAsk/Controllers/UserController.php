<?php

namespace Src\TellDonotAsk\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateWallet(Request $request)
    {
        // find user
        $user = User::find($request->userId);

        // BAD WAY
        // update user balance
        $user->update([
            "wallet"=> $user->wallet += $request->amount
        ]);


        // GOOD WAY - Learn to Talk to Your Objects
        $user->changeUserWallet($request->amount);
    }
}
