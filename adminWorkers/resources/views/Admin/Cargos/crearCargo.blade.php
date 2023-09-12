{{-- Llamar una vista y añadir algo más --}}
@extends('Users.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cargo</title>
</head>
<body>
    {{-- Si existe la variable empleado --}}
    @if (isset($cargo))
        <h1>Editar Cargo</h1>
    @else
        <h1>Crear Cargo</h1>
    @endif

    @if (@isset($cargo))
        <form action="{{ route("cargos.update", $cargo) }}" method="post">
        {{-- Reemplazo de método de validación --}}
        @method("PUT")
    @else
        <form action="{{ route("cargos.store") }}" method="post">
    @endif

        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required  name="nombreCargo" value="{{ @$cargo->nombreCargo }}">
        </div>

        @error('nombre')
            <h1>{{ $message }}</h1>
        @enderror

        <div class="mb-3">
          <label for="comments" class="form-label">Descripción de cargo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descripcionCargo" value="{{ @$cargo->descripcionCargo }}">
        </div>

        @error('descripcionCargo')
            <h1>{{ $message }}</h1>
        @enderror
        <br><br>

        @if (isset($cargo))
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        {{-- Reemplazo de método de validación --}}
        @method("PUT")

        @else
            <button type="submit" class="btn btn-success">Crear Cargo</button>
        @endif
    </form>
</body>
</html>
