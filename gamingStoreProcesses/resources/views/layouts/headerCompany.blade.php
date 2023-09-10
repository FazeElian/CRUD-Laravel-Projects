@yield('headerCompany')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset("css/Company/styles.css") }}">
        <link rel="stylesheet" href="{{ asset("css/Admin/styles.css") }}">

        {{-- Boostrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        {{-- Header --}}
        <header class="header">
                @if (Auth::check())
                @endif
                @guest
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route("logout")}}"><button class="item-nav-users btn-login">Cerrar Sesión</button></a>
                        @else

                        <nav class="nav-bar-company">
                            <a href="/"><li class="item-nav-company">Inicio</li></a>
                            <a href="#"><li class="item-nav-company">Nuestros Productos</li></a>
                            <a href="#"><li class="item-nav-company">Nosotros</li></a>
                            <a href="#"><li class="item-nav-company">Acerca de</li></a>
                        </nav>

                        <nav class="nav-bar-users">
                            <a href="{{ route('login') }}"><li class="item-nav-users"><button class="item-nav-users btn-login">Iniciar Sesión</button></li></a>
                            @if (Route::has('register'))

                            <a href="{{ route('register') }}"><li class="item-nav-users"><button class="item-nav-users btn-register">Registrarse</button></li></a>
                            @endif
                        @endauth
                        </nav>
                    @endif

                    @else
                    <nav class="nav-bar-company">
                        <a href="{{ route("home") }}"><li class="item-nav-company">Inicio</li></a>
                        <a href="{{ route("products.index") }}"><li class="item-nav-company">Productos</li></a>
                        <a href="{{ route("categories.index") }}"><li class="item-nav-company">Categorías de Productos</li></a>
                        <a href="{{ route("sales.index") }}"><li class="item-nav-company">Ventas</li></a>
                        <a href="{{ route("factures.index") }}"><li class="item-nav-company">Facturas</li></a>
                    </nav>

                    <nav class="nav-bar-users">
                        <li class="item-nav-company">
                            <a id="navbarDropdown" class="dropdown-toggle user-name" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <p>{{ Auth::user()->name }}</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item cerrar-sesion-text" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <h6>Cerrar Sesión</h6>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </nav>
                @endguest
        </header>
    </body>
</html>
