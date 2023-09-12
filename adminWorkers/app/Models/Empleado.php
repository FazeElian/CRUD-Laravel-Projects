<?php
// Se trae el espacio de la ruta de modelos
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Inclusión de los nombre de cada columna de la tabla del controlador Empleado
    protected $fillable = ["nombre", "apellido", "cargo", "descripcionCargo", "salario"];
}
