@extends('layouts.plantillabase')
@section('title', 'Equipos ' . $equipo->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('equipo.create')}}">Crear equipo</a>
            <a class="navbar-brand" href="{{route('equipo.index')}}">Volver a equipos</a>
        </div>
    </nav>

    <h4>Equipo {{$equipo->nombre}}</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Id Club</th>
            <th scope="col">Opciones</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$equipo->id}}</th>
            <td>
                {{$equipo->nombre}}
            </td>
            <td>
                {{$equipo->club_id}}
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{route('equipo.edit', $equipo->id)}}" class="btn btn-outline-primary">Editar</a>
                    <a href="{{route('equipo.destroy', $equipo->id)}}" class="btn btn-outline-primary">Eliminar</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
