@extends('layouts.plantillabase')

@section('title', 'Jugadores')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('jugador.create')}}">Añadir jugador</a>
            <a class="navbar-brand" href="{{route('jugador.index')}}">Volver a jugadores</a>
        </div>
    </nav>

    <h4>Crear Equipos</h4>

    <form action="{{route('jugador.store')}}" method="post">

        @csrf

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Introduzca nombre" name="nombre" required>

            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" placeholder="Introduzca apellidos" name="apellidos" required>

            <label for="posicion" class="form-label">Posición</label>
            <input type="text" class="form-control" placeholder="Introduzca posicion" name="posicion" required>
        </div>

        <div class="row mb-3">
            <select class="form-select" name="equipo_id" required>
                <option value="">Seleccione un equipo</option>
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-info">Enviar formulario</button>

    </form>
@endsection

