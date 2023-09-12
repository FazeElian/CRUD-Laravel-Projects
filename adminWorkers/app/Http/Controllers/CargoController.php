<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::paginate(5); // Cada página tendrá 5 registros
        return view("Admin.Cargos.cargos")->with("cargos", $cargos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Cargos.crearCargo");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombreCargo" => "required",
            "descripcionCargo"
        ]);

        $cargo = Cargo::create($request->only("nombreCargo", "descripcionCargo"));

        Session::flash("mensaje", "Cargo creado con éxito");
        return redirect()->route("cargos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        return view("Admin.Cargos.crearCargo")->with("cargo", $cargo);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            "nombreCargo" => "required",
            "descripcionCargo"
        ]);

        $cargo->nombreCargo = $request["nombreCargo"];
        $cargo->descripcionCargo = $request["descripcionCargo"];

        $cargo->save();

        Session::flash("mensaje", "Los cambios han sido guardados");
        return redirect()->route("cargos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        Session::flash("mensaje", "Cargo Eliminado");
        return redirect()->route("cargos.index");
    }
}
