<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipos::all();
        return view('equipos.index', compact('equipos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'year_of_creation' => 'required',
            'division' => 'required',
            'description' => 'required',
        ]);

        Equipos::create($validatedData);

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $equipo = Equipos::find($id);
        return view('equipos.edit', compact('equipo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipos $equipos)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'year_of_creation' => 'required',
            'division' => 'required',
            'description' => 'required',
        ]);

        $equipos->update($validatedData);

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipos $equipos)
    {
        $equipos->delete();
        return redirect()->route('equipos.index')
            ->with('success', 'Equipo eliminado correctamente.');
    }
}
