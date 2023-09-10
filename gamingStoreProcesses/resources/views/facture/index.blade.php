@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store | Admin | Facturas</title>
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Lista de Facturas</h1>
            </div>
            <div class="btn-pdf">
                <a href="#">
                    Generar PDF
                    <img src="{{ asset("img/Admin/pdf-icon.png") }}" alt="">
                </a>
            </div>
            <div class="button-create">
                <a href="{{ route('factures.create') }}">
                    Nueva Factura
                </a>
            </div>
        </div>

        {{-- @if ($message = Session::get('success'))
            <script>alert({{ $message }});</script>
        @endif --}}
    </div>
    <div class="search-filters">
        <div class="cont-select">
            <select name="" id="select">
                <option value="Filtrar por categoría">Filtrar por</option>
            </select>
        </div>

        <div class="search-bar">
            <input type="search" name="search-product" id="search-bar" placeholder="  Busca aquí un producto">
        </div>
    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Name</th>
										<th>Product Id</th>
										<th>Amountproduct</th>
										<th>Priceproduct</th>
										<th>Totalpriceproduct</th>
										<th>Totalcost</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($factures as $facture)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $facture->name }}</td>
											<td>{{ $facture->product_id }}</td>
											<td>{{ $facture->amountProduct }}</td>
											<td>{{ $facture->priceProduct }}</td>
											<td>{{ $facture->totalPriceProduct }}</td>
											<td>{{ $facture->totalCost }}</td>

                                            <td>
                                                <form action="{{ route('factures.destroy',$facture->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('factures.show',$facture->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('factures.edit',$facture->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
