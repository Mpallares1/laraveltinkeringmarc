<?php

use App\Http\Controllers\EquiposController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/create', [PeliculaController::class, 'create'])->name('peliculas.create');
Route::post('/peliculas/store', [PeliculaController::class, 'store'])->name('peliculas.store');
Route::get('/peliculas/{id}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::get('/peliculas/destroy/{id}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');
Route::put('/peliculas/update/{id}', [PeliculaController::class, 'update'])->name('peliculas.update');
Route::get('/peliculas/{id}', [PeliculaController::class, 'show'])->name('peliculas.show');
Route::delete('/peliculas/{id}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');

Route::get('/equipos', [EquiposController::class, 'index'])->name('equipos.index');
Route::get('/equipos/create', [EquiposController::class, 'create'])->name('equipos.create');
Route::post('/equipos/store', [EquiposController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{id}/edit', [EquiposController::class, 'edit'])->name('equipos.edit');
Route::get('/equipos/destroy/{id}', [EquiposController::class, 'destroy'])->name('equipos.destroy');
Route::put('/equipos/update/{id}', [EquiposController::class, 'update'])->name('equipos.update');
Route::get('/equipos/{id}', [EquiposController::class, 'show'])->name('equipos.show');
Route::delete('/equipos/{id}', [EquiposController::class, 'destroy'])->name('equipos.destroy');
