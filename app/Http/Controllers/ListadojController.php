<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugadore;

class ListadojController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores= Jugadore::all();
        return view('listadoj.index', compact('jugadores')); //compact es la variable con la que se inica el for ech
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $jugadore=Jugadore::findOrFail($id); // el find es para buscar registro
        return view('listadoj.edit', compact('jugadore'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
