<?php

// Aquí se deben estar usando todos los controladores de las vistas, sino va a mostrar error de página sin la interfaz
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Creación de todas las rutas
// Ruta Principal Empresa
Route::get('/', function () {
    return view('company');
});

// Ruta Empleados
Route::resource("empleados", EmpleadoController::class);

// Ruta Roles
Route::resource("cargos", CargoController::class);
