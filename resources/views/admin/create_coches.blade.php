@extends('admin.index')

@section("content")

    <h1 class="text-center text-success">{{ __("Crear o modificar un coche") }}</h1>

<table class="table table-success table-striped text-center" style="width: 100%">
    <thead>
    <tr>
        <th scope="col">{{ ("Marca") }}</th>
        <th scope="col">{{ ("Modelo") }}</th>
        <th scope="col">{{ ("Version") }}</th>
        <th scope="col">{{ ("Combustible") }}</th>
        <th scope="col">{{ ("Potencia") }}</th>
        <th scope="col">{{ ("Precio") }}</th>
        <th scope="col">{{ ("Editar") }}</th>
        <th scope="col">{{ ("Eliminar") }}</th>
    </tr>
    </thead>
    <tbody>
        @forelse($coches as $coche)
            <tr>

                <td>{{ $coche->marca }}</td>

                <td>{{ $coche->modelo }}</td>

                <td>{{ $coche->version }}</td>

                <td>{{ $coche->combustible }}</td>

                <td>{{ $coche->potencia }}</td>

                <td>{{ $coche->precio }}</td>

                <td class="border px-4 py-2"><a href="{{ route('coches.edit',$coche->id)}}">{{ __(" Editar") }}</a></td>
                <td>
                    <a href="#" style="color:red" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $coche->id }}-form').submit();"
                        >{{ __(" Eliminar") }}
                    </a>
                        <form id="delete-project-{{ $coche->id }}-form" action="{{ route('coches.destroy', $coche->id) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                </td>
                    
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <p><strong class="font-bold">{{ __("No hay coches") }}</strong></p>
                        <span class="block sm:inline">{{ __("Todavía no hay coches que mostrar aquí") }}</span>
                    </div>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">

<div class="flex justify-center flex-wrap bg-red-200 p-4 mt-0">
        <div class="text-center">
                <a href="{{ route('coches.create') }}" class="bg-green hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{ __("Crear nuevo coche") }}
            </a> 
        </div>
    </div>

</div>
@endsection