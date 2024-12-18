<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $films = Pelicula::all();
       return view('peliculas.index', compact('films'));
        //
    }

    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Duration' => 'required',
            'Genre' => 'required',
            'Sales' => 'required',
        ]);

        Pelicula::create($validatedData);

        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula creada correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Pelicula::find($id);
        return view('peliculas.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $id)
    {
        $film = Pelicula::find($id);
        $validatedData = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Duration' => 'required',
            'Genre' => 'required',
            'Sales' => 'required',
        ]);

        $film->update($validatedData);

        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula actualitzada correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();

        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula eliminada correctament.');



    }
}
