<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
    use HasFactory;
    protected $table = 'jugadores';
    protected $fillable = [
        'nombre',
        'camiseta',
        'posicion',
        'nacionalidad',
    ];

}
