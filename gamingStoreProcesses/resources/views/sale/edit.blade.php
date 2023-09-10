@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Venta | {{ $sale->product->name}}</title>
</head>
<body>

    @includeif('partials.errors')
        <div class="">
            <form method="POST" action="{{ route('sales.update', $sale->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                @include('sale.form')
            </form>
        </div>
