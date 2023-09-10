@include("layouts.headerCompany")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías | Nueva Categoría</title>
</head>
<body>
    <div class="cont-section">
        <div class="title-section">
            <div class="text">
                <h1>Nueva Categoría</h1>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <script>alert({{ $message }})</script>
        @endif
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('categories.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            @include('category.form')
        </form>
    </div>
</body>
</html>
