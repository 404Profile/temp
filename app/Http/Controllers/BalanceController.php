<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    public function increaseBalance(Request $request)
    {
        $user = Auth::user();
        if ($user && $user->balance < 10000) {
            $user->balance = min(10000, $user->balance + 1000);
            $user->save();
            return redirect()->back()->with('success', 'Баланс успешно пополнен');
        }
        return redirect()->back()->with('error', 'У вас уже и так много денег');
    }
}
