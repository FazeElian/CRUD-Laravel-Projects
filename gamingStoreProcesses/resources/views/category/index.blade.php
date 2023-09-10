@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store | Admin | Categorías Productos</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/categories-styles.css") }}">
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Lista de Categorías de Productos</h1>
            </div>
            <div class="btn-pdf">
                <a href="#">
                    Generar PDF
                    <img src="{{ asset("img/Admin/pdf-icon.png") }}" alt="">
                </a>
            </div>
            <div class="button-create">
                <a href="{{ route('categories.create') }}">
                    Nueva Categoría
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <script>alert({{ $message }});</script>
        @endif
    </div>

    <div class="search-filters">
        <div class="cont-select">
        </div>

        <div class="search-bar">
            <input type="search" name="search-category-product" id="search-bar" placeholder="  Busca aquí una categoría">
        </div>
    </div>

    <div class="cont-table table-responsive table-responsive">
        <table class="table-records">
            <thead>
                <tr class="columns-caract">
                    <td scope="col" class="no item-column">No</td>
                    <td scope="col" class="name-category item-column">Nombre Categoría</td>
                    <td scope="col" class="description-category item-column">Descripción</td>
                    <td scope="col" class="actions item-column">Acciones</td>
                </tr>
            </thead>
            <tbody class="tbody-table">
                @foreach ($categories as $category)
                    <tr class="rows-info">
                            <td scope="row" class="no-info item-row">{{ ++$i }}</td>
                            <td scope="row" class="name-category-info item-row">{{ $category->name }}</td>
                            <td scope="row" class="description-category-info item-row">{{ $category->description }}</td>
                            <td scope="row" class="actions-info item-row">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                    <button class="btn-view"><a href="{{ route('categories.show',$category->id) }}">Ver</a></button>
                                    <button class="btn-edit"><a href="{{ route('categories.edit',$category->id) }}">Editar</a></button>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Eliminar</button>
                                </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
