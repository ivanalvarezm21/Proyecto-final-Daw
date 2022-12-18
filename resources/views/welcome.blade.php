<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans" style="background-image: url('https://blog.japemasa.com/wp-content/uploads/2021/11/concesionario-japemasa.jpg'); background-size:cover;">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <div class="text-center">
                    <a href="{{ url('/home') }}" style="background: green;" class="text-white hover:bg-blue-500 font-semibold py-2 px-4 hover:border-transparent rounded">
                        {{ __("Inicio") }}
                    </a>
                </div>
            @else
            <div class="d-flex flex-row">
                <div class="text-center">
                    <a href="{{ route('login') }}" style="background: green; text-decoration: none;" class="text-white hover:bg-blue-500 font-semibold py-2 px-4 hover:border-transparent rounded">
                        {{ __("Iniciar sesión") }}
                    </a>
                </div>
                @if (Route::has('register'))
                <div class="text-center">
                    <a href="{{ route('register') }}" style="background: green; text-decoration: none;" class="text-white hover:bg-blue-500 font-semibold py-2 px-4 hover:border-transparent rounded">
                        {{ __("Registrarse") }}
                    </a>
                </div>
                @endif
            </div>
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-content-end text-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray text-center font-light tracking-wider text-3xl sm:mb-8 sm:text-6xl" style="color: white">
                    Automóviles Iván
                </h1>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
