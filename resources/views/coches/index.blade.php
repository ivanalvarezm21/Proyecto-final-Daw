@extends("layouts.app2") 

<!-- px-4 py-2 -->

@section("content")
<html>
    @if(Auth::check() and Auth::user()->hasRoles('admin'))
        <div class="flex justify-center flex-wrap bg-blue p-4 mt-5">
            <div class="text-center">
            <h1 class="mb-5" style="font-weight:bold">{{ __("Acciones disponibles para el administrador") }}</h1>
                <a href="{{ route('coches.create') }}" class="bg-primary text-white hover:bg-blue-500 text-blue-700 font-semibold py-2 px-3 border border-blue-500 hover:border-transparent rounded justify-center">
                    {{ __("Crear coche") }}
                </a>
                <a href="{{ url('/paypal/pay') }}" class="bg-primary text-white hover:bg-blue-500 text-blue-700 font-semibold py-2 px-3 border border-blue-500 hover:border-transparent rounded justify-center">
                    {{ __("Prueba de PayPal") }}
                </a>
            </div>
        </div>
    @endif
<body>
@if(Auth::check() and Auth::user()->hasRoles('guest'))
    <div class="flex justify-center flex-wrap bg-lime-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5" style="font-weight:bold; font-size:40px">{{ __("Listado de anuncios publicados") }}</h1>
            <p>Bienvenido al listado general, aquí podrás ver todos los coches disponibles:</p>
        </div>
    </div>
@endif
<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%; background-color:rgb(211,211,211);opacity:1;">
        <thead>
        <tr>
            <th class="px-3">{{ __("Marca") }}</th>
            <th class="px-3">{{ __("Modelo") }}</th>
            <th class="px-3">{{ __("Versión") }}</th>
            <th class="px-3">{{ __("Combustible") }}</th>
            <th class="px-3">{{ __("Potencia") }}</th>
            <th class="px-3">{{ __("Precio") }}</th>
            <th class="px-3">{{ __("Extras") }}</th>
            @if(Auth::check() and Auth::user()->hasRoles('admin'))
            <th class="px-3">{{ __("Acciones") }}</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @forelse($coches as $coche)
                <tr>
                    <td class="px-3">{{ $coche->marca }}</td>
                    <td class="px-3">{{ $coche->modelo }}</td>
                    <td class="px-3">{{ $coche->version }}</td>
                    <td class="px-3">{{ $coche->combustible }}</td>
                    <td class="px-3">{{ $coche->potencia }}</td>
                    <td class="px-3">{{ $coche->precio }}</td>
                    <td class="px-3"><a class="btn btn-warning" href="{{ route('coches.info',$coche->id)}}">Más Información</a>
                    @if(Auth::check() and Auth::user()->hasRoles('admin'))
                    <td class="px-3"><a class="btn btn-primary" href="{{ route('coches.edit',$coche->id)}}">Editar</a>
                    <a href="#" class="btn btn-danger text-white" style="color:red" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $coche->id }}-form').submit();"
                        >{{ __(" Eliminar") }}
                    </a>
                        <form id="delete-project-{{ $coche->id }}-form" action="{{ route('coches.destroy', $coche->id) }}" class="d-inline" method="POST">
                            @csrf   
                            @method("DELETE")
                        </form>
                    </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="12">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay coches") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay coches que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if(Auth::check() and Auth::user()->hasRoles('guest'))
    <div class="flex justify-center flex-wrap bg-lime-200 p-3 mt-4">
        <div class="text-center">
            <p>¿Quieres publicar un anuncio?</p>
        </div>
        <br/>
    </div>
    <div class="text-center">
        <a href="{{ route('coches.create') }}" class="bg-primary text-white hover:bg-blue-500 text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Publicar anuncio") }}
        </a>
    </div>
    <br>
    @endif
    @if($coches->count())
        <div class="mt-2">
            {{ $coches->links() }}
        </div>
    @endif
    </body>
</html>
@endsection