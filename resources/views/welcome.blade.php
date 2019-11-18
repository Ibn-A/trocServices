<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>trocServices</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" media="screen" href="{{ asset('css/welcome.css') }}">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a href="{{ route('login') }}">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    trocServices
                </div>

            </div>
        </div>
    </body>
</html>
