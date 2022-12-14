@extends("layouts.app2")

@section("content")
@if(Auth::check() and Auth::user()->hasRoles('admin'))
    <div class="flex justify-center flex-wrap bg-red-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5" style="font-weight:bold">{{ __("Crear coche nuevo") }}</h1>
            <a href="{{ route('coches.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{ __("Crear coche") }}
            </a> 
        </div>
    </div>
@endif

@if(Auth::check() and Auth::user()->hasRoles('guest'))
    <div class="flex justify-center flex-wrap bg-lime-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5" style="font-weight:bold; font-size:40px">{{ __("Listado de coches") }}</h1>
        </div>
    </div>
@endif

    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%; background-color:rgb(211,211,211);opacity:1; ">
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
            <th class="px-4 py-2">Imagen</th>
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
                    <td class="border px-4 py-2">
                        @if($coche->modelo == 'Golf') <!--Coche 1-->
                        <!-- <img src="https://fotos.perfil.com/2020/05/13/asi-es-el-volkswagen-golf-gti-de-octava-generacion-955561.jpg" alt="imagen-1"> -->
                        <a href="https://fotos.perfil.com/2020/05/13/asi-es-el-volkswagen-golf-gti-de-octava-generacion-955561.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Megane') <!--Coche 2-->
                        <a href="https://www.autonocion.com/wp-content/uploads/2018/02/renault_megane_r_s__65.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == '207') <!--Coche 3-->
                        <a href="https://www.coches.com/fotos_historicas/peugeot/207-GTI-2007/peugeot_207-gti_r4.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == '220E') <!--Coche 4-->
                        <a href="https://www.autobild.es/sites/autobild.es/public/styles/main_element/public/dc/fotos/Mercedes-E-Class_2014_01.jpg?itok=vTSeABpF" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == '318') <!--Coche 5-->
                        <a href="https://a.ccdn.es/cnet/contents/media/bmw/serie_3/1031261.jpg//937x624cut/" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Corsa') <!--Coche 6-->
                        <a href="https://www.autonocion.com/wp-content/uploads/2019/11/opel_corsa_gs_line_14_00df01d014de0f66.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Civic') <!--Coche 7-->
                        <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/2018_Honda_Civic_GT_Type_R_VTEC_2.0_Front.jpg/1200px-2018_Honda_Civic_GT_Type_R_VTEC_2.0_Front.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Giulia') <!--Coche 8-->
                        <a href="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/DJUGZCI2XREVLDHXCCSWTP7SAE.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Ibiza') <!--Coche 9-->
                        <a href="https://a.ccdn.es/cnet/contents/media/seat/ibiza/1265591.jpg" style="color:blue">Imagen</a>
                        @endif
                        @if($coche->modelo == 'Clio') <!--Coche 10-->
                        <a href="https://prod.pictures.autoscout24.net/listing-images/b8758164-129d-48f7-a785-f1db6de1261d_bd92f8e1-df17-4cc5-a687-2beb60ef43d6.jpg/1920x1080.webp" style="color:blue">Imagen</a>
                        @endif
                    </td>
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