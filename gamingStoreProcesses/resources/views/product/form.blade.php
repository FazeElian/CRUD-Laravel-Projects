<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/products-styles.css") }}">

    {{-- Scripts --}}
    <script defer src="{{ asset("js/Admin/products/newProduct.js") }}"></script>
</head>
<body>
    {{-- Form --}}
    <div class="cont-form">
        <div class="info-form">
            <div class="form-img-product">
                <div class="img">
                    <img src="{{ asset("storage")."/".$product->image }}" alt="Imagen del producto" id="imagenPreview">
                </div>

                <div class="select-image">
                    {{ Form::file('image', ['class' => 'selectImage' . ($errors->has('selectImage') ? ' is-invalid' : ''), 'id' => 'selectImage', 'name' => 'image']) }}
                    {!! $errors->first('name', '<div class="error-message-characters">La imagen del producto es un dato obligatorio</div>') !!}
                </div>
            </div>
            <div class="info-product-form">
                <div class="form-name">
                    {{ Form::label('nombre Producto') }}
                    {{ Form::text('name', $product->name, [($errors->has('name') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('name', '<div class="error-message-characters">El nombre del producto es un dato obligatorio</div>') !!}
                </div>
                <div class="form-name">
                    {{ Form::label('categoría Producto') }}
                    {{ Form::select('categorie_id', $categories,$product->categorie_id, [($errors->has('categorie_id') ? ' is-invalid' : ''), 'id' => 'selectCategorie']) }}
                </div>
                <div class="form-description">
                    {{ Form::label('descripción') }}
                    {{ Form::text('description', $product->description, [($errors->has('description') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('name', '<div class="error-message-characters">Debes darle una descripción al producto</div>') !!}
                </div>
                <div class="form-name">
                    {{ Form::label('precio') }}
                    {{ Form::number('price', $product->price, [($errors->has('price') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('price', '<div class="error-message-characters">El precio del producto es un dato obligatorio</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="cont-btn-submit">
        <button type="submit" class="btn-submit"><a class="">Guardar</a></button>
    </div>
