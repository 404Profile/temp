<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $departurePoints = Route::query()
            ->select('departure_point')
            ->distinct()
            ->pluck('departure_point')
            ->toArray();

        $arrivalPoints = Route::query()
            ->select('arrival_point')
            ->distinct()
            ->pluck('arrival_point')
            ->toArray();

        $routes = Route::query()
            ->where('departure_date', '>=', now()->toDateString())
            ->where('departure_time', '>=', now()->addHours(3)->toTimeString())
            ->get();

        return Inertia::render('Dashboard', [
            'departurePoints' => $departurePoints,
            'arrivalPoints' => $arrivalPoints,
            'initialRoutes' => $routes,
        ]);
    }
}
