@include('layouts.headerCompany')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store | Admin | Inicio</title>
</head>
<body>
    <section class="general-info">
        <div class="text-general">
            <h1>Bienvenido  de vuelta {{ Auth::user()->name }}!</h1>
            <h2>Aquí encontrarás las novedades con respecto a tu negocio y su administración</h2>
        </div>
    </section>
</body>
</html>
