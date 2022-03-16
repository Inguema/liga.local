@extends('layouts.plantillabase')
@section('title', 'Clubs ' . $club->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('club.create')}}">Crear club</a>
            <a class="navbar-brand" href="{{route('club.index')}}">Volver a clubs</a>
        </div>
    </nav>
    <h4>{{$club->nombre}}</h4>
    <div class="row mb-3">
        <p>Id: {{$club->id}}</p>
        <p>Nombre: {{$club->nombre}}</p>
        <p>Fecha de creación: {{$club->created_at}}</p>
        <p>Fecha de actualización: {{$club->updated_at}}</p>
    </div>
@endsection
