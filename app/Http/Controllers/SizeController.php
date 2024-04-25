<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('size.index', [ 'sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $size = new Size();
        return view('size.create', [ 'size' => $size]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $size = new Size();
        $size->name = $request->input('name');
        $size->status = $request->input('status');
        $size->save();
        return redirect()->route('size.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ize = Size::find($id);
        return view('size.show', [ 'size' => $size]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::find($id);
        return view('size.edit', [ 'size' => $size]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $size = Size::find($id);
    $size->name = $request->input('name');
    $size->status = $request->input('status');
    $size->save();
    return redirect()->route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect()->route('size.index');
    }
}
