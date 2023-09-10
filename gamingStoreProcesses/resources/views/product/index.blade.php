@include('layouts.headerCompany')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store | Admin | Productos</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/products-styles.css") }}">
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Lista de Productos</h1>
            </div>
            <div class="btn-pdf">
                <a href={{ route('products.create') }}">
                    Generar PDF
                    <img src="{{ asset("img/Admin/pdf-icon.png") }}" alt="">
                </a>
            </div>
            <div class="button-create">
                <a href="{{ route('products.create') }}">
                    Nuevo Producto
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>

    <div class="search-filters">
        <div class="cont-select">
            <select name="" id="select">
                <option value="Filtrar por categoría">Filtrar por categoría</option>
            </select>
        </div>

        <div class="search-bar">
            <input type="search" name="search-product" id="search-bar" placeholder="  Busca aquí un producto">
        </div>
    </div>

    <div class="cont-products">
        @foreach ($products as $product)
        <div class="cont-product">
            <div class="product">
                <div class="img-product">
                    <img src="{{ asset("storage")."/".$product->image }}" alt="Imagen del producto">
                </div>
                <div class="info-product">
                    <div class="name">
                        <h1><b>Nombre Producto: </b>{{ $product->name }}</h1>
                    </div>
                    <div class="description">
                        <p><b>Descripción: </b>{{ $product->description }}
                        </p>
                    </div>
                    <div class="price">
                        <h2><b>Precio:</b> {{ $product->price }} $</h2>
                    </div>
                    <div class="category">
                        <h3><b>Categoría: </b> {{ $product->category->name}}</h3>
                    </div>
                </div>
            </div>

            <div class="options-product">
                <div class="title-options">
                    <h1>Opciones: </h1>
                </div>
                <div class="btns-options">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <div class="show">
                            <button><a href="{{ route('products.show',$product->id) }}">Ver</a></button>
                        </div>
                        <div class="edit">
                            <button><a href="{{ route('products.edit',$product->id) }}">Editar</a></button>
                        </div>
                        @csrf
                        @method('DELETE')
                        <div class="delete">
                            <button type="submit"><a class="">Eliminar</a></button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
