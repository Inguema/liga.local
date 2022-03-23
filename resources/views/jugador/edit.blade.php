@extends('layouts.plantillabase')

@section('title', 'Editar ' . $jugador->nombre)

@section('content')
    <br>
    <form action="{{route('jugador.update', $jugador->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label"><strong>Nombre Jugador</strong></label>
            <input name="nombre" type="text" value="{{old('nombre',$jugador->nombre)}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="apellidos" class="form-label"><strong>Apellidos Jugador</strong></label>
            <input name="apellidos" type="text" value="{{old('apellidos', $jugador->apellidos)}}">
            @error('apellidos')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

            <label for="posicion" class="form-label"><strong>Posición</strong></label>
            <input name="posicion" type="text" value="{{old('posicion', $jugador->posicion)}}">
            @error('posicion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>

        <button type="submit" class="btn btn-secondary">Guardar</button>
        <a href="{{route('jugador.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Jugadores</a>

    </form>
@endsection
