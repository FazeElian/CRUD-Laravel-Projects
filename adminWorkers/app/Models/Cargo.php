<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    // Inclusión de los nombre de cada columna de la tabla del controlador Empleado
    protected $fillable = ["nombreCargo", "descripcionCargo"];
}
