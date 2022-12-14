@extends("layouts.app2") 

<!-- px-4 py-2 -->

@section("content")
<html>
<body>
    <h3 style="font-weight:bold" class="text-center mt-3">Más información</h3>

    <p class="text-center mt-3">Desde esta pestaña puedes obtener más información del vehículo:</p>

    <div class="d-flex flex-row justify-content-between">
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://www.autonocion.com/wp-content/uploads/2018/11/Logos-marcas-coches.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Marca del vehículo") }}</h5>
            <p class="card-text text-center">{{ $coches->marca }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://www.autopista.es/uploads/s1/55/29/34/8/5e4e5ebb0de694bb783493cc-ranking-los-25-coches-y-las-25-marcas-con-mas-ventas-en-europa-en-todo-2019.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Modelo disponible") }}</h5>
            <p class="card-text text-center">{{ $coches->modelo }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 15rem;">
            <img src="https://img.joomcdn.net/d11dc5876a0e66185132846c5ee1622b36d63674_original.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Versión del modelo") }}</h5>
            <p class="card-text text-center">{{ $coches->version }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 15rem;">
            <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2018/07/etiquetas-gasolina.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Combustible del motor") }}</h5>
            <p class="card-text text-center">{{ $coches->combustible }}</p>
        </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between">
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/07/coches-mejor-motor-2020apertura-1983119.jpg?itok=58c-HeUT" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Potencia del motor") }}</h5>
            <p class="card-text text-center">{{ $coches->potencia }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 18rem;">
            <img src="https://s03.s3c.es/imag/_v0/1200x655/b/0/a/2-euros-esp-dreamstime.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Precio actual") }}</h5>
            <p class="card-text text-center">{{ $coches->precio }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 15rem;">
            <img src="https://www.lavanguardia.com/files/image_449_220/files/fp/uploads/2020/10/07/5f7d92400766a.r_d.800-533-3782.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Año de matriculación del vehículo") }}</h5>
            <p class="card-text text-center">{{ $coches->año }}</p>
        </div>
        </div>
        <div class="card w-full p-6 mt-3" style="width: 15rem;">
            <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/10/como-saber-cuentakilometros-trucado-2116295.jpg?itok=oXRcFkf8" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;">{{ __("Kilómetros del motor") }}</h5>
            <p class="card-text text-center">{{ $coches->kilometros }}</p>
        </div>
        </div>
    </div>
    </body>

    <h3 style="font-weight:bold" class="text-center mt-3">¿Interesado en el vehículo?</h3>
    <p class="text-center mt-3">Puedes realizar una reserva por 10€</p>
    <br>
    <div class="text-center mt-3">
        <a href="{{ url('/paypal/pay') }}" class="bg-primary text-white hover:bg-blue-500 text-blue-700 font-semibold py-2 px-3 border border-blue-500 hover:border-transparent rounded justify-center">
            {{ __("Aquí") }}
        </a>
    </div>
    <br>
    <h3 style="font-weight:bold" class="text-center mt-3">Datos de contacto facilitados por el vendedor</h3>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive table-bordered border-separate border-1 border-black text-center mt-3 rounded" style="width: 50%; opacity:1; ">
                <thead class="text-white" style="background-color:rgb(30,58,138)">
                    <tr>
                        <th class="px-3">{{ __("Correo electrónico") }}</th>
                        <th class="px-3">{{ __("Teléfono") }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-3">{{ $coches->correo }}</td>
                        <td class="px-3">{{ $coches->telefono }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</html>
@endsection