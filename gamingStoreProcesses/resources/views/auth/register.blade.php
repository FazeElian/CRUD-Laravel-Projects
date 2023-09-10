@include('layouts.headerCompany')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaming Store | Registrarse</title>
</head>
<body>
    <div class="cont-login">
        <form method="POST" action="{{ route('register') }}" class="form-login">
            <h1>Registrarse</h1>
            @csrf
                <label for="name" class="">{{ __('Nombre') }}</label>
                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email" class="">{{ __('Correo Electrónico') }}</label>
                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password" class="">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm" class="">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">

                <button  type="submit" class="btn-purple">
                    {{ __('Registrarse') }}
                </button>
        </form>
    </div>
</body>
</html>
