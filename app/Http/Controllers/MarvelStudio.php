<?php

namespace App\Http\Controllers;

use App\Models\Marvel;
use Illuminate\Http\Request;

class MarvelStudio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Marvel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Marvel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Marvel::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $marvel = Marvel::findOrFail($id);
        $marvel->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marvel = Marvel::findOrFail($id);
        $marvel->delete();
    }
}
