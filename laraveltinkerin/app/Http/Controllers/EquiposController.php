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
    public function show($id)
    {
        $equipo = Equipos::find($id);
        return view('equipos.show', compact('equipo'));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'year_of_creation' => 'required|integer',
            'division' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $equipo = Equipos::find($id); // Correct class name
        if ($equipo) {
            $equipo->name = $request->input('name');
            $equipo->city = $request->input('city');
            $equipo->year_of_creation = $request->input('year_of_creation');
            $equipo->division = $request->input('division');
            $equipo->description = $request->input('description');
            $equipo->save();

            return redirect()->route('equipos.index')
                ->with('success', 'Equipo actualizado correctamente.');
        } else {
            return redirect()->route('equipos.index')
                ->with('error', 'Equipo no encontrado.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipos::find($id);
        if ($equipo) {
            $equipo->delete();
            return redirect()->route('equipos.index')
                ->with('success', 'Equipo eliminado correctamente.');
        } else {
            return redirect()->route('equipos.index')
                ->with('error', 'Equipo no encontrado.');
        }
    }
}
