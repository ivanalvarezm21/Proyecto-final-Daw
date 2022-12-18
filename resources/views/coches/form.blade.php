<form class="w-full max-w-lg border-4 form-group" method="POST" action="{{ $route }}" enctype="multipart/form-data" style="background-color:lightgray">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
    <h1 class="font-semibold py-5 text-blue mb-5 bg-blue-900 text-white px-5 text-center">{{ $title }} </h1>
    <div class="flex flex-wrap -mx-2 mb-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="marca">
                {{ __("Marca") }}
            </label>
            <input name="marca" value="{{ old('marca') ?? $coches->marca }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="marca" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Marca del coche") }}</p>
            <br>
            @error("marca")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo marca no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2 mb-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="modelo">
                {{ __("Modelo") }}
            </label>
            <input name="modelo" value="{{ old('modelo') ?? $coches->modelo }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="modelo" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Modelo del coche") }}</p>
            <br>
            @error("modelo")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo modelo no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2 mb-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="version">
                {{ __("Version") }}
            </label>
            <input name="version" value="{{ old('version') ?? $coches->version }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="version" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Version del coche") }}</p>
            <br>
            @error("version")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo versión no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2 mb-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="modelo">
                {{ __("Combustible") }}
            </label>
            <input name="combustible" value="{{ old('combustible') ?? $coches->combustible }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="combustible" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Combustible que utiliza el motor") }}</p>
            <br>
            @error("combustible")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo combustible no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2 mb-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="potencia">
                {{ __("Potencia") }}
            </label>
            <input name="potencia" value="{{ old('potencia') ?? $coches->potencia }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="potencia" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Potencia del motor") }}</p>
            <br>
            @error("potencia")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo potencia no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="precio">
                {{ __("Precio") }}
            </label>
            <input name="precio" value="{{ old('precio') ?? $coches->precio }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control" id="precio" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Precio del vehículo") }}</p>
            <br>
            @error("precio")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                <p>El campo precio no puede estar vacío</p>
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="año">
                {{ __("Año") }}
            </label>
            <input name="año" value="{{ old('año') ?? $coches->año }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="año" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Año de matriculación del vehículo") }}</p>
            <br>
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="kilometros">
                {{ __("Kilometros") }}
            </label>
            <input name="kilometros" value="{{ old('kilometros') ?? $coches->kilometros }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="kilometros" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Kilometros del vehículo") }}</p>
            <br>
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="correo">
                {{ __("Correo electrónico del vendedor") }}
            </label>
            <input name="correo" value="{{ old('correo') ?? $coches->correo }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="correo" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Correo de contacto (Opcional)") }}</p>
            <br>
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="kilometros">
                {{ __("Teléfono del vendedor") }}
            </label>
            <input name="telefono" value="{{ old('telefono') ?? $coches->telefono }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telefono" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Teléfono del vehículo (Opcional)") }}</p>
            <br>
        </div>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="imagen">
                {{ __("Url de la imagen") }}
            </label>
            <input name="imagen" value="{{ old('imagen') ?? $coches->imagen }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="imagen" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Imagen del vehículo (Opcional)") }}</p>
            <br>
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>