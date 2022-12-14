@extends('admin.index')

@section("content")

    <h1 class="text-center text-success">{{ __("Listado de usuarios") }}</h1>

<table class="table table-success table-striped" style="width: 100%">
    <thead>
    <tr>
        <th scope="col">{{ ("Nombre") }}</th>
        <th scope="col">{{ ("Email") }}</th>
        <th scope="col">{{ ("Rol") }}</th>
        <th scope="col">{{ ("Fecha") }}</th>
        <th scope="col">{{ ("Editar") }}</th>
        <th scope="col">{{ ("Eliminar") }}</th>
    </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>
                    @foreach ($user->roles as $role)
                        {{ $role->name.' ' }}
                    @endforeach
                </td>
                <td>{{ date_format($user->created_at, "d/m/Y") }}</td>

            <!--    <td class="border px-4 py-2"><a href="{{ route('users.edit',$user->id)}}">{{ __(" Editar") }}</a></td>
                <td>
                    <a href="#" style="color:red" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $user->id }}-form').submit();"
                        >{{ __(" Eliminar") }}
                    </a>
                        <form id="delete-project-{{ $user->id }}-form" action="{{ route('users.destroy', $user->id) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                </td> -->
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <p><strong class="font-bold">{{ __("No hay usuarios") }}</strong></p>
                        <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                    </div>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">

</div>
@endsection
