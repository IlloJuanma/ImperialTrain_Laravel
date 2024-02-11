<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;
use Illuminate\Support\Facades\DB;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketTypes = TicketType::all();

        return view('ticketTypes/index', ['ticketTypes' => $ticketTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketTypes = TicketType::all();
        return view('ticketTypes/create', ['ticketTypes' => $ticketTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketType = new TicketType;

        $ticketType -> type = $request -> input('type');     
        $ticketType -> save();   
        return redirect('ticketTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketType = TicketType::find($id);
        return view('ticketTypes/show', ['ticketType' => $ticketType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketTypes = TicketType::find($id);
        return view('ticketTypes/edit', ['ticketTypes' => $ticketTypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketType = TicketType::find($id);

        $ticketType -> type = $request -> input('type');

        $ticketType -> save();
        return redirect('ticketTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('ticket_types')->where('id', "=", $id)->delete();
        return redirect('ticketTypes');
    }
}
