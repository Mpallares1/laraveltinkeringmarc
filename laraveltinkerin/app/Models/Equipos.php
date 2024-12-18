<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    /** @use HasFactory<\Database\Factories\EquiposFactory> */
    use HasFactory;

    protected $fillable = ['name', 'city', 'year_of_creation', 'division', 'description'];
}
