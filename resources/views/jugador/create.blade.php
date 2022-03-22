@extends('layouts.plantillabase')

@section('title', 'Jugadores')

@section('content')
    <nav class="navbar">
        <a href="{{route('jugador.create')}}" class="btn btn-outline-warning btn-lg active" role="button" aria-pressed="true">Añadir Jugador</a>
    </nav>

    <form action="{{route('jugador.store')}}" method="post">

        @csrf

        <div class="row mb-3">
            <label for="nombre" class="form-label"><strong>Nombre</strong></label>
            <input type="text" class="form-control" placeholder="Introduzca nombre" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="apellidos" class="form-label"><strong>Apellidos</strong></label>
            <input type="text" class="form-control" placeholder="Introduzca apellidos" name="apellidos" value="{{old('apellidos')}}">
            @error('apellidos')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="posicion" class="form-label"><strong>Posición</strong></label>
            <input type="text" class="form-control" placeholder="Introduzca posicion" name="posicion" value="{{old('posicion')}}">
            @error('posicion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>

        <div class="row mb-3">
            <select class="form-select" name="equipo_id" required>
                <option value="">Seleccione un equipo</option>
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-secondary">Enviar</button>

    </form>
@endsection

