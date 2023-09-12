<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::paginate(5); // Cada página tendrá 5 registros
        return view("Admin.Empleados.empleados")->with("empleados", $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Empleados.crearEmpleado");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required",
            "apellido" => "required",
            "cargo" => "required",
            "descripcionCargo",
            "salario" => "required"
        ]);


        $empleado = Empleado::create($request->only("nombre", "apellido", "cargo", "descripcionCargo", "salario"));

        Session::flash("mensaje", "Empleado Creado con éxito");
        return redirect()->route("empleados.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view("Admin.Empleados.crearEmpleado")->with("empleado", $empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            "nombre" => "required",
            "apellido" => "required",
            "cargo" => "required",
            "descripcionCargo",
            "salario" => "required"
        ]);

        $empleado->nombre = $request["nombre"];
        $empleado->apellido = $request["apellido"];
        $empleado->cargo = $request["cargo"];
        $empleado->descripcionCargo = $request["descripcionCargo"];
        $empleado->salario = $request["salario"];

        // Se guarda en la base de datos
        $empleado->save();

        Session::flash("mensaje", "Los cambios han sido guardados");
        return redirect()->route("empleados.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        Session::flash("mensaje", "Empleado eliminado");

        return redirect()->route("empleados.index");
    }
}
