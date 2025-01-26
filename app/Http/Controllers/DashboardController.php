<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $tickets = Ticket::query()->where('user_id', Auth::id())->get();
        return Inertia::render('Dashboard', [
            'count' => count($tickets),
        ]);
    }
}
