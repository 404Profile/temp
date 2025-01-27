<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('routes', RouteController::class);
    Route::resource('tickets', TicketController::class);
    Route::post('/increase-balance', [BalanceController::class, 'increaseBalance'])->name('increaseBalance');
    Route::post('/get-balance', [BalanceController::class, 'getBalance'])->name('getBalance');
});

require __DIR__.'/auth.php';
