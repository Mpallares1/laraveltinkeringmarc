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
    public function show($id)
    {
        $film = Pelicula::find($id);
        return view('peliculas.show', compact('film'));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'Description' => 'required|string',
            'Duration' => 'required|string',
            'genre' => 'required|string|max:255',
            'sales' => 'required|integer',
        ]);

        $film = Pelicula::find($id);
        if ($film) {
            $film->Title = $request->input('title');
            $film->Description = $request->input('Description');
            $film->Duration = $request->input('Duration');
            $film->Genre = $request->input('genre');
            $film->Sales = $request->input('sales');
            $film->save();

            return redirect()->route('peliculas.index')
                ->with('success', 'Película actualizada correctamente.');
        } else {
            return redirect()->route('peliculas.index')
                ->with('error', 'Película no encontrada.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */




    public function destroy($id)
    {
        $film = Pelicula::find($id);
        if ($film) {
            $film->delete();
            return redirect()->route('peliculas.index')
                ->with('success', 'Película eliminada correctamente.');
        } else {
            return redirect()->route('peliculas.index')
                ->with('error', 'Película no encontrada.');
        }
    }
}
