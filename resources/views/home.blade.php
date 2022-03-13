<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Página Inicial</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col-sm-6 col-12 logo">
            <a href="https://www.agenciaecode.com.br"><img src="img/logo.svg" id="logo" alt="logo"></a>
        </div>

        <div class="col-sm-6 col-12 login-cadastro">
            @if (Route::has('login'))
                <div class="right-0 sm:block login-cadastro-interno">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a id="inf-esquerda" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a id="inf-direita" href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
</body>

</html>
