@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store | Admin | Ventas</title>

    {{-- Extra Styles --}}
    <link rel="stylesheet" href="{{ asset("css/Admin/categories-styles.css") }}">
    <link rel="stylesheet" href="{{ asset("css/Admin/sales-styles.css") }}">
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Lista de Ventas Registradas</h1>
            </div>
            <div class="btn-pdf">
                {{-- <a href="{{ route("") }}"> --}}
                    Generar PDF
                    <img src="{{ asset("img/Admin/pdf-icon.png") }}" alt="">
                </a>
            </div>
            <div class="button-create">
                <a href="{{ route('sales.create') }}">
                    Registrar Venta
                </a>
            </div>
        </div>

        {{-- @if ($message = Session::get('success'))
            <script>alert({{ $message }});</script>
        @endif --}}
    </div>

    <div class="cont-table table-responsive table-responsive">
        <table class="table-records">
            <thead>
                <tr class="columns-caract">
                    <td scope="col" class="no item-column">No</td>
                    <td scope="col" class="name-product item-column">Nombre Producto</td>
                    <td scope="col" class="amount-product item-column">Cantidad</td>
                    <td scope="col" class="price-product item-column">Precio</td>
                    <td scope="col" class="total-sale item-column">Total Venta</td>
                    <td scope="col" class="actions item-column">Acciones</td>
                </tr>
            </thead>
            <tbody class="tbody-table">
                @foreach ($sales as $sale)
                    <tr class="rows-info">
                        <td scope="row" class="no-info item-row">{{ ++$i }}</td>
                        <td scope="row" class="name-product-info item-row">{{ $sale->product->name }}</td>
                        <td scope="row" class="amount-product-info item-row">{{ $sale->amountProduct }}</td>
                        <td scope="row" class="price-product-info item-row">{{ $sale->priceProduct }} $</td>
                        <td scope="row" class="total-sale-info item-row">{{ $sale->totalSale }} $$</td>
                        <td scope="row" class="actions-info item-row">
                            <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">
                                <button class="btn-view"><a href="{{ route('sales.show',$sale->id) }}">Ver</a></button>
                                <button class="btn-edit"><a href="{{ route('sales.edit',$sale->id) }}">Editar</a></button>
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
