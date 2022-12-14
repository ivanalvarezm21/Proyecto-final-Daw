@extends('admin.index')

@section("content")

    <h1 class="text-center text-success">{{ __("Listado de coches") }}</h1>

<table class="table table-success table-striped text-center" style="width: 100%">
    <thead>
    <tr>
        <th scope="col">{{ ("Marca") }}</th>
        <th scope="col">{{ ("Modelo") }}</th>
        <th scope="col">{{ ("Version") }}</th>
        <th scope="col">{{ ("Combustible") }}</th>
        <th scope="col">{{ ("Potencia") }}</th>
        <th scope="col">{{ ("Precio") }}</th>
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

</div>
@endsection