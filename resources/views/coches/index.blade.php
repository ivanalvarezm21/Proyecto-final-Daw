@extends("layouts.app2")

@section("content")
@if(Auth::check() and Auth::user()->hasRoles('admin'))
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Crear coche nuevo") }}</h1>
            <a href="{{ route('coches.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{ __("Crear coche") }}
            </a> 
        </div>
    </div>
@endif

@if(Auth::check() and Auth::user()->hasRoles('guest'))
    <div class="flex justify-center flex-wrap bg-lime-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de coches") }}</h1>
        </div>
    </div>
@endif

    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ __("Marca") }}</th>
            <th class="px-4 py-2">{{ __("Modelo") }}</th>
            <th class="px-4 py-2">{{ __("Version") }}</th>
            <th class="px-4 py-2">{{ __("Combustible") }}</th>
            <th class="px-4 py-2">{{ __("Potencia") }}</th>
            <th class="px-4 py-2">{{ __("Precio") }}</th>
            @if(Auth::check() and Auth::user()->hasRoles('admin'))
            <th class="px-4 py-2">{{ __("Acciones") }}</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @forelse($coches as $coche)
                <tr>
                    <td class="border px-4 py-2">{{ $coche->marca }}</td>
                    <td class="border px-4 py-2">{{ $coche->modelo }}</td>
                    <td class="border px-4 py-2">{{ $coche->version }}</td>
                    <td class="border px-4 py-2">{{ $coche->combustible }}</td>
                    <td class="border px-4 py-2">{{ $coche->potencia }}</td>
                    <td class="border px-4 py-2">{{ $coche->precio }}</td>
                    @if(Auth::check() and Auth::user()->hasRoles('admin'))
                    <td class="border px-4 py-2"><a  style="color:blue" href="{{ route('coches.edit',$coche->id)}}">Editar |</a>
                    <a href="#" class="text-danger" style="color:red" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $coche->id }}-form').submit();"
                        >{{ __(" Eliminar") }}
                    </a>
                        <form id="delete-project-{{ $coche->id }}-form" action="{{ route('coches.destroy', $coche->id) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
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
    @if($coches->count())
        <div class="mt-3">
            {{ $coches->links() }}
           
        </div>
    @endif
@endsection