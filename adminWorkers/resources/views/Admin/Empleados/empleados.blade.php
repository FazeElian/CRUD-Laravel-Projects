{{-- Llamar una vista de encabezado y añadir algo más --}}
@extends('Users.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Empleados</title>
</head>
<body>
    @if (Session::has("mensaje"))
        <div class="alert alert-primary my-5">
            {{ Session::get("mensaje") }}
        </div>
    @endif

    <h1>Lista de Empleados: </h1>
    <br>

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cargo</th>
            <th>Descripción Cargo</th>
            <th>Salario</th>
            <td>Opciones</td>
        </thead>
        <tbody>
            @forelse ($empleados as $fila)
                <tr>
                    <td>{{ $fila->nombre }}</td>
                    <td>{{ $fila->apellido }}</td>
                    <td>{{ $fila->cargo }}</td>
                    <td>{{ $fila->descripcionCargo }}</td>
                    <td>{{ $fila->salario }}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $fila) }}" class="btn btn-primary">Editar</a>

                        <form action="{{ route("empleados.destroy", $fila) }}" method="post" class="d-inline">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td class="text-center">
                    No hay Registros</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Paginación de registros --}}
    {{ $empleados->links()}}


    <a href="{{ route("empleados.create") }}">
    <button class="btn btn-success">Crear Nuevo Empleado</button>
    </a>
</body>
</html>
