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
                {{ Form::label('nombre Producto') }}
                {{ Form::select('product_id', $products,$sale->product_id, ['class' => '' . ($errors->has('product_id') ? ' is-invalid' : '')]) }}
                {!! $errors->first('product_id', '<div class="error-message-characters"> El producto es obligatorio</div>') !!}
            </div>
            <div class="name">
                {{ Form::label('cantidad Producto') }}
                {{ Form::number('amountProduct', $sale->amountProduct, ['class' => '' . ($errors->has('amountProduct') ? ' is-invalid' : '')]) }}
                {!! $errors->first('amountProduct', '<div class="error-message-characters">La cantidad de producto es un dato obligatorio</div>') !!}
            </div>
            <div class="name">
                {{ Form::label('precio Producto') }}
                {{ Form::number('priceProduct', $sale->priceProduct, ['class' => '' . ($errors->has('priceProduct') ? ' is-invalid' : '')]) }}
                {!! $errors->first('priceProduct', '<div class="error-message-characters">El precio del producto es un dato obligatorio</div>') !!}
            </div>
        </div>
        <div class="cont-btn-submit">
            <button type="submit" class="btn-submit">Guardar</button>
        </div>
    </div>
</body>
</html>
