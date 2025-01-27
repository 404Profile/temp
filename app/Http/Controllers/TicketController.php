<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with('route')->where('user_id', Auth::id())->get();

        return Inertia::render('Tickets/Index', [
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Tickets/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'route_id' => 'required|exists:routes,id',
        ]);

        $existingTicket = Ticket::where('user_id', Auth::id())->where('route_id', $request->route_id)->first();

        if ($existingTicket) {
            return redirect()->back()->with('error', 'Билет уже был заказан на этот маршрут');
        }

        $route = Route::query()->where('id', $request->route_id)->first();

        $user = User::query()->where('id', Auth::id())->first();
        $user->balance -= $route->cost;

        if ($user->balance < 0) {
            return redirect()->back()->with('error', 'У вас недостаточно денег');
        }

        $user->update();

        $ticket = new Ticket();
        $ticket->user_id = Auth::id();
        $ticket->route_id = $route->id;
        $ticket->save();

        return redirect()->route('tickets.index')->with('success', 'Билет успешно заказан');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return Inertia::render('Tickets/Show', [
            'ticket' => $ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        return Inertia::render('Tickets/Edit', [
            'ticket' => $ticket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ticket::destroy($id);
        return redirect()->route('tickets.index')->with('success', 'Билет успешно удален');

    }
}
