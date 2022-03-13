@extends('master')

@section('title', 'Página Inicial')

@section('content')

    <body>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="col-sm-6 col-12 logo">
                <a href="https://www.agenciaecode.com.br "target="_blank" bla><img src="img/logo.svg" id="logo" alt="logo"></a>
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
        </nav>

        <div class="container" id="container-home">
            <div>
                <div id="div-h2">
                    <h3>Usuários já cadastrados na plataforma</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $users)
                            <tr>
                                <td>{{ $users->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </body>

    </html>

@endsection
{{-- @foreach ($user as $users)
<tr>$user->name</tr>
@endforeach --}}
