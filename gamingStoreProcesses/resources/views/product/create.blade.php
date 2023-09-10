@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos | Nuevo Producto</title>
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Nuevo Producto</h1>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('products.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            @include('product.form')
        </form>
    </div>
</body>
</html>
