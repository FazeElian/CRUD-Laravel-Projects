@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver | {{ $category->name }}</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/categories-styles.css") }}">
</head>
<body>
    <div class="cont-form">
        <div class="info-form">
            <div class="name">
                <h4>Nombre Categoría: </h4>
                <p>{{ $category->name }}</p>
            </div>

            <div class="name">
                <h4>Descripción:</h4>
                <p>{{ $category->description }}</p>
            </div>
        </div>
        <div class="cont-btn-submit">
            <button type="submit" class="btn-submit"><a href="{{ route("categories.index") }}">Volver</a></button>
        </div>
    </div>
