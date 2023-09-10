<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/categories-styles.css") }}">
</head>
<body>
    <div class="cont-form">
        <div class="info-form">
            <div class="name">
                {{ Form::label('nombre Categoría') }}
                {{ Form::text('name', $category->name, ['class' => '' . ($errors->has('name') ? ' is-invalid' : '')]) }}
                {!! $errors->first('name', '<div class="error-message-characters">El nombre de categoría es obligatorio</div>') !!}
            </div>
            <div class="description">
                {{ Form::label('descripción') }}
                {{ Form::text('description', $category->description, ['class' => '' . ($errors->has('description') ? ' is-invalid' : '')]) }}
                {!! $errors->first('description', '<div class="error-message-characters">Debes darle una descripción a la categoría</div>') !!}
            </div>
        </div>

        <div class="cont-btn-submit">
            <button type="submit" class="btn-submit">Guardar</button>
        </div>
    </div>
