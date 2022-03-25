@extends('layouts.plantillabase')
@section('title', 'Equipos ' . $equipo->nombre)

@section('content')
    @can('edit')
    <nav class="navbar">
        <a href="{{route('equipo.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Equipo</a>
    </nav>
    @endcan

    <div class="row mb-3">
        <p><strong>Id: </strong>{{$equipo->id}}</p>
        <p><strong>Nombre: </strong>{{$equipo->nombre}}</p>
        <p><strong>Fecha de creación: </strong>{{$equipo->created_at}}</p>
        <p><strong>Fecha de actualización: </strong>{{$equipo->updated_at}}</p>
    </div>

    <a href="{{route('equipo.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Equipos</a>
@endsection
