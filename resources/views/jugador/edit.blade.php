@extends('layouts.plantillabase')

@section('title', 'Editar ' . $jugador->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('jugador.create')}}">Añadir jugador</a>
            <a class="navbar-brand" href="{{route('jugador.index')}}">Volver a jugadores</a>
        </div>
    </nav>

    <h4>Modificar ficha del jugador {{$jugador->nombre}}{{' '}}{{$jugador->apellidos}}</h4>

    <form action="{{route('jugador.update', $jugador->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre Jugador</label>
            <input name="nombre" type="text" value="{{old('nombre',$jugador->nombre)}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="apellidos" class="form-label">Apellidos Jugador</label>
            <input name="apellidos" type="text" value="{{old('apellidos', $jugador->apellidos)}}">
            @error('apellidos')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="posicion" class="form-label">Posición</label>
            <input name="posicion" type="text" value="{{old('posicion', $jugador->posicion)}}">
            @error('posicion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
@endsection
