@extends('layouts.plantillabase')
@section('title', 'Clubs ' . $club->nombre)

@section('content')
    @can('edit')
    <nav class="navbar">
        <a href="{{route('club.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Club</a>
    </nav>
    @endcan

    <div class="row mb-3">
        <p><strong>Id: </strong>{{$club->id}}</p>
        <p><strong>Nombre: </strong>{{$club->nombre}}</p>
        <p><strong>Fecha de creación: </strong>{{$club->created_at}}</p>
        <p><strong>Fecha de actualización: </strong>{{$club->updated_at}}</p>
    </div>

    <a href="{{route('club.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Clubs</a>

@endsection
