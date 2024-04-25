<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return view('unit.index', [ 'units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unit = new Unit();
        return view('unit.create', [ 'unit' => $unit]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unit = new Unit();
        $unit->name = $request->input('name');
        $unit->status = $request->input('status');
        $unit->save();
        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::find($id);
        return view('unit.show', [ 'unit' => $unit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Unit::find($id);
        return view('unit.edit', [ 'unit' => $unit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unit = Unit::find($id);
        $unit->name = $request->input('name');
        $unit->status = $request->input('status');
        $unit->save();
        return redirect()->route('unit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect()->route('unit.index');
    }
}
