@extends('layouts.app2')
@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Bienvenido: {{ Auth::user()->name }}
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    Gracias por iniciar sesión <br>
                    Para ver los vehículos listados puede acceder al apartado con su mismo nombre. <br>
                    Para enviar un mensaje al administrador de la página puede dirigirse al apartado de contacto.
                </p>
            </div>
        </section>
    </div>
        <h3 class="text-center strong mt-3">Algunos ejemplos de vehículos</h3>

    <div class="d-flex flex-row justify-content-between">
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2017/02/609571-virtudes-seat-ibiza-2017-imagen.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Seat Ibiza</h5>
            <p class="card-text">Seat Ibiza 2017</p>
            <a href="{{ route('coches.index') }}" class="btn btn-primary">Ver anuncios disponibles</a>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://www.elgoldigital.com/wp-content/uploads/2020-ford-focus-st.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Ford Focus</h5>
            <p class="card-text">Ford Focus 2020</p>
            <a href="{{ route('coches.index') }}" class="btn btn-primary">Ver anuncios disponibles</a>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://www.autofacil.es/wp-content/uploads/2021/08/renault_arkana_2021.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Renault Arkana</h5>
            <p class="card-text">Renault Arkana 2022</p>
            <a href="{{ route('coches.index') }}" class="btn btn-primary">Ver anuncios disponibles</a>
        </div>
        </div>
    </div>
        <h3 class="text-center strong mt-4">Nuestro trabajo</h3>
        <div class="w-full sm:px-6">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <div class="w-full p-6">
                    <p class="text-gray-700">
                        Nosotros nos encargamos de proporcionar una web donde los usuarios puedan 
                        publicar anuncios sobre sus coches que quieren vender y facilitar
                        a los compradores la elección del coche que están buscando.
                    </p>
                </div>
            </section>
        </div>

        <h3 class="text-center strong mt-4">Características especiales</h3>
        <div class="w-full sm:px-6">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <div class="w-full p-6">
                    <p class="text-gray-700">
                        En el apartado de "Más información" de cada vehículo podrás tener la oportunidad de reservar una prueba con el vendedor<br>
                        para ver el coche en persona.
                    </p>
                </div>
            </section>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</main>
@endsection