@extends('Users.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Cargos</title>
</head>
<body>
    <h1>Lista de Cargos: </h1>
    <br>

    @if (Session::has("mensaje"))
        <div class="alert alert-primary my-5">
            {{ Session::get("mensaje") }}
        </div>
    @endif

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Descripción Cargo</th>
            <td>Opciones</td>
        </thead>
        <tbody>
            @forelse ($cargos as $fila)
                <tr>
                    <td>{{ $fila->nombreCargo }}</td>
                    <td>{{ $fila->descripcionCargo }}</td>
                    <td>
                        <a href="{{ route('cargos.edit', $fila) }}" class="btn btn-primary">Editar</a>

                        <form action="{{ route("cargos.destroy", $fila) }}" method="post" class="d-inline">
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

        {{-- Paginación de registros --}}
        {{ $cargos->links()}}
    </table>

    <a href="{{ route("cargos.create") }}">
        <button class="btn btn-success">Crear Nuevo Cargo</button>
    </a>
</body>
</html>
