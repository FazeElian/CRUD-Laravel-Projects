{{-- Llamar una vista y añadir algo más --}}
@extends('Users.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    {{-- Si existe la variable empleado --}}
    @if (isset($empleado))
        <h1>Editar Empleado</h1>
    @else
        <h1>Crear Empleado</h1>
    @endif

        @if (isset($empleado))
            <form action="{{ route("empleados.update", $empleado) }}" method="post">
            {{-- Reemplazo de método de validación --}}
            @method("PUT")
        @else
            <form action="{{ route("empleados.store") }}" method="post">
        @endif

        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required  name="nombre" value="{{ @$empleado->nombre }}">
        </div>

        @error('nombre')
            <h1>{{ $message }}</h1>
        @enderror

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="apellido" value="{{ @$empleado->apellido }}">
        </div>

        @error('apellido')
            <h1>{{ $message }}</h1>
        @enderror

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Cargo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="cargo" value="{{ @$empleado->cargo }}">
        </div>

        @error('cargo')
            <h1>{{ $message }}</h1>
        @enderror

        <div class="mb-3">
          <label for="comments" class="form-label">Descripción de cargo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descripcionCargo" value="{{ @$empleado->descripcionCargo }}">
        </div>

        @error('descripcionCargo')
            <h1>{{ $message }}</h1>
        @enderror

        <div class="mb-3">
          <label for="comments" class="form-label">Salario</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" step="0.01" required name="salario" value="{{ @$empleado->salario }}">
        </div>

        @error('salario')
            <h1>{{ $message }}</h1>
        @enderror

        <br><br>

        @if (isset($empleado))
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        {{-- Reemplazo de método de validación --}}
        @method("PUT")

        @else
        <button type="submit" class="btn btn-success">Crear Empleado</button>
        @endif
    </form>
</body>
</html>
