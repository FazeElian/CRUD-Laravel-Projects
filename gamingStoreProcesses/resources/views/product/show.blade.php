@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver | {{ $product->name }}</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/products-styles.css") }}">
</head>
<body>
    <div class="cont-form">
        <div class="info-form">
            <div class="form-img-product">
                <div class="img">
                    <img src="{{ asset("storage")."/".$product->image }}" alt="Imagen del producto" id="imagenPreview">
                </div>

                <div class="select-image">

                </div>
            </div>
            <div class="info-product-form">
                <div class="form-name-label">
                    <label>Nombre Producto: {{ $product->name }}</label>
                </div>
                <div class="form-name-label">
                    <label>Categoría: {{ $product->category->name}}</label>
                </div>
                <div class="form-description-label">
                    <label>Descripción: {{ $product->description }}</label>
                </div>
                <div class="form-price-label">
                    <label>Precio: {{ $product->price }} $</label>
                </div>
            </div>
        </div>
    </div>
    <div class="cont-btn-submit">
        <button type="submit" class="btn-submit btn-come-back"><a href="{{ route("products.index") }}">Volver</a></button>
    </div>
