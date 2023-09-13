<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Librería Ebooks</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset("img/favicon.png") }}" type="image/x-icon">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <section class="sect-content jty-alg-center">
            <div class="cont-welcome jty-alg-center">
                <h1>Bienvenido a la librería de Ebooks <img src="{{ asset("img/favicon.png") }}" alt=""> !</h1>
            </div>
            <div class="cont-user jty-alg-center">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="item-cont-user jty-alg-center"></a>
                    @else
                        <a href="{{ route('login') }}" class="item-cont-user jty-alg-center">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="item-cont-user margin-left jty-alg-center">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </div>
        </section>
    </body>
</html>
