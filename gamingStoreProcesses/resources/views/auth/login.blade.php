@include('layouts.headerCompany')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaming Store | Iniciar Sesión</title>
</head>
<body>
    <div class="cont-login">
        <form method="POST" action="{{ route('login') }}" class="form-login">
            <h1>Iniciar Sesión</h1>

            @csrf
            <label for="email" class="">{{ __('Correo Electrónico') }}</label>
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <label for="password" class="">{{ __('Contraseña') }}</label>
            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <div class="error-message-characters"> La contraseña no es correcta</div>
            @enderror
            @error('email')
                <div class="error-message-characters"> Las credenciales son incorrectas</div>
            @enderror
            {{-- @if (Route::has('password.request'))
            <a class="olvidar-contraseña" href="{{ route('password.request') }}">
                {{ __('Olvidaste la Contraseña? Reestablécela ahora') }}
            </a>
            @endif --}}

            <button type="submit" class="btn-purple">
                {{ __('Iniciar Sesión') }}
            </button>
        </form>
    </div>
</body>
</html>
