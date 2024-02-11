<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Train;
use App\Models\TrainType;
use App\Models\TicketType;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets/index', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trains= Train::all();
        $ticket_types= TicketType::all();
        return view('tickets/create', ['trains' => $trains, 'ticket_types' => $ticket_types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;

        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('train_type');
        $ticket -> ticket_type_id = $request -> input('ticket_type');

        $ticket -> save();

        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return view('tickets/show', ['ticket' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trains = Train::all();
        $ticket_types = TrainType::all();
        $tickets = Ticket::find($id);
        return view ('tickets/edit', [
            'trains' => $trains,
            'ticket_types' => $ticket_types,
            'tickets' => $tickets
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('train_type');
        $ticket -> ticket_type_id = $request -> input('ticket_type');

        $ticket -> save();

        return redirect('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tickets')->where('id', "=", $id)->delete();

        return redirect('/tickets');
    }
}
