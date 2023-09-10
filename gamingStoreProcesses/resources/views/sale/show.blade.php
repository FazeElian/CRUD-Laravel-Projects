@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Venta | {{ $sale->product->name }}</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/categories-styles.css") }}">
</head>
<body>
    <div class="cont-form">
        <div class="info-form">
            <div class="name">
                <h4>Nombre Producto: </h4>
                <p>{{ $sale->product->name }}</p>
            </div>
            <div class="name">
                <h4>Cantidad:</h4>
                <p>{{ $sale->amountProduct }}</p>
            </div>
            <div class="name">
                <h4>Precio:</h4>
                <p>{{ $sale->priceProduct }} $</p>
            </div>
        </div>
        <div class="cont-btn-submit">
            <button type="submit" class="btn-submit"><a href="{{ route("sales.index") }}">Volver</a></button>
        </div>
    </div>
</body>
</html>
