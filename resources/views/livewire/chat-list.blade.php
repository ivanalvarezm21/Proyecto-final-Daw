<div>
    <h5 class="mt-3">Lista de mensajes</h5>
    @foreach($mensajes as $mensaje)
        <li>{{$mensaje["usuario"]}} - {{$mensaje["mensaje"]}}</li>
    @endforeach
</div>
