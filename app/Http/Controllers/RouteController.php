<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departurePoints = Route::select('departure_point')->distinct()->pluck('departure_point')->toArray();
        $arrivalPoints = Route::select('arrival_point')->distinct()->pluck('arrival_point')->toArray();

        $routes = Route::all();

        return Inertia::render('Routes/Index', [
            'departurePoints' => $departurePoints,
            'arrivalPoints' => $arrivalPoints,
            'initialRoutes' => $routes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Routes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $route = Route::create($request->all());
        return redirect()->route('routes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = Route::findOrFail($id);
        return Inertia::render('Routes/Show', [
            'route' => $route
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $route = Route::findOrFail($id);
        return Inertia::render('Routes/Edit', [
            'route' => $route
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $route = Route::findOrFail($id);
        $route->update($request->all());
        return redirect()->route('routes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Route::destroy($id);
        return redirect()->back()->with('success', 'Маршрут успешно удален');
    }
}
