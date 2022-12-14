@extends('adminlte::page')

@section('title', 'Coches')

@section('content_header')
    <h1 class="text-center">Panel de administrador</h1>
@stop

@section('content')
    <p class="text-center">Bienvenido al panel principal del administrador de la página</p>
    
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Descripción general</h1>
        </div>
        
        <div class="card-body">
            <p>Desde este menú el administrador podrá controlar todas las acciones relacionadas a su rol, las cuales están descritas en los siguientes apartados.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Acciones relacionadas con los coches</h1>
        </div>
        
        <div class="card-body">
            <p>En este apartado se encuentran todas las acciones para modificar, crear o listar los coches disponibles en la página:
                <ul>
                    <li style="text-decoration: underline;">Crear o modificar un coche:</li>
                    <p>Dentro de esta opción se pueden listar todos los vehículos además de dos columnas extras para <br>
                        editar y eliminar cada vehículo, de forma que resulte más sencillo para el administrador.
                    </p>
                    <li style="text-decoration: underline;">Listar coches:</li>
                    <p>En esta opción se pueden listar todos los vehículos que ya están creados en la<br>
                        base de datos, para una revisión y búsqueda más cómoda.
                    </p>
                </ul>
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Acciones relacionadas con los usuarios</h1>
        </div>
        
        <div class="card-body">
            <p>Desde este menú el administrador podrá controlar todas las acciones relacionadas a su rol, las cuales están descritas en los siguientes apartados.
                <ul>
                    <li style="text-decoration: underline;">Listar usuarios:</li>
                    <p>En este apartado el administrador puede listar todos los usuarios disponibles que se hayan <br>
                    registrado en la página así como ver los roles asignados a cada uno de ellos y su fecha de registro/creación.</p>
                </ul>
            </p>
        </div>
    </div>

    <div style="background-image: url(''); background-size:cover; height: 500px; width: 500px;"></div>

@stop

@section('footer')
    <div style="color:red; height: 20px; width: 100px;"> </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop