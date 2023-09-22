<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class ListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('listado.index', compact('personas')); //compact es la variable con la que se inica el for ech
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;

        $persona->save(); //esta funcion "save" guarda todo en la 
        return redirect()->route('listado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona= Persona::findOrFail($id);
        return view('listado.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $persona= Persona::findOrFail($id);// trabaja en un solo campo, selecciona mediante un id
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;

        $persona->save(); //esta funcion "save" actualiza en esta otra (funcion update)
        return redirect()->route('listado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona= Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('listado.index');
    }
}
