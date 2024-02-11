<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;
use Illuminate\Support\Facades\DB;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainsTypes = TrainType::all();

        return view('trainsTypes/index', ['trainsTypes' => $trainsTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainTypes = TrainType::all();
        return view('trainsTypes/create', ['trainTypes' => $trainTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainType = new TrainType;

        $trainType -> type = $request-> input('type');
        $trainType -> save();

        return redirect('trainsTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainTypes = TrainType::find($id);
        return view('trainsTypes/show', ['trainTypes' => $trainTypes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainTypes = TrainType::find($id);
        return view('trainsTypes/edit', ['trainTypes' => $trainTypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainType = TrainType::find($id);

        $trainType -> type = $request -> input('type');

        $trainType -> save();
        return redirect('trainsTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('train_types')->where('id',"=",$id)->delete();
        return redirect('trainsTypes');
    }
}
