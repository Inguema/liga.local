@extends('layouts.plantillabase')
@section('title', 'Jugador ' . $jugador->nombre)

@section('content')
    <nav class="navbar">
        <a href="{{route('jugador.create')}}" class="btn btn-outline-warning btn-lg active" role="button" aria-pressed="true">Añadir Jugador</a>
    </nav>

    <div class="row mb-3">
        <p><strong>Id: </strong>{{$jugador->id}}</p>
        <p><strong>Nombre: </strong>{{$jugador->nombre}}</p>
        <p><strong>Apellidos: </strong>{{$jugador->apellidos}}</p>
        <p><strong>Posición: </strong>{{$jugador->posicion}}</p>
        <p><strong>Fecha de creación: </strong>{{$jugador->created_at}}</p>
        <p><strong>Fecha de actualización: </strong>{{$jugador->updated_at}}</p>
    </div>
@endsection
