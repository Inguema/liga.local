@extends('layouts.plantillabase')
@section('title', 'Equipos ' . $equipo->nombre)

@section('content')
    <nav class="navbar">
        <a href="{{route('equipo.create')}}" class="btn btn-outline-warning btn-lg active" role="button" aria-pressed="true">Añadir Equipo</a>
    </nav>

    <div class="row mb-3">
        <p><strong>Id: </strong>{{$equipo->id}}</p>
        <p><strong>Nombre: </strong>{{$equipo->nombre}}</p>
        <p><strong>Fecha de creación: </strong>{{$equipo->created_at}}</p>
        <p><strong>Fecha de actualización: </strong>{{$equipo->updated_at}}</p>
    </div>

@endsection
