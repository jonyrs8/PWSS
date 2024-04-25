<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('color.index', [ 'colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:255|min:2',
            'status' => 'required|in:active,inactive',
        ]);

        $color = new Color();
        $color->name = $request->input('name');
        $color->status = $request->input('status');
        $color->save();

        return redirect()->route('color.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $color = Color::find($id);
        return view('color.show', [ 'color' => $color]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $color = Color::find($id);
        return view('color.edit', [ 'color' => $color]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Color::find($id);
        $brand->name = $request->input('name');
        $brand->status = $request->input('status');
        $brand->save();
        return redirect()->route('color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Color::find($id);
        $brand->delete();
        return redirect()->route('color.index');
    }
}
