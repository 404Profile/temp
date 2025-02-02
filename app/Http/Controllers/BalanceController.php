<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BalanceController extends Controller
{
    public function increaseBalance(Request $request)
    {
        $user = Auth::user();
        if ($user && $user->balance < 10000) {
            $user->balance = min(10000, $user->balance + 1000);
            $user->save();
            return response()->json(['status' => 'success', 'message' => 'Баланс успешно пополнен, Ваш баланс теперь ' . $user->balance, 'balance' => $user->balance])
                ->setStatusCode(201);
        }
        return response()->json(['status' => 'error', 'message' => 'У вас уже и так много денег. Ваш баланс ' . $user->balance, 'balance' => $user->balance])
            ->setStatusCode(201);
    }

    public function getBalance()
    {
        return Auth::user()->balance;
    }
}
