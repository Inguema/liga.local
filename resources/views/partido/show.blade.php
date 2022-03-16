@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('partido.create')}}">Partido Nuevo</a>
            <a class="navbar-brand" href="{{route('partido.index')}}">Volver a partidos</a>
        </div>
    </nav>

    <h4>Partido</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Equipo Local</th>
            <th scope="col">Equipo Visitante</th>
            <th scope="col">Marcador</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$partido->id}}</th>
            <td>
                {{$partido->equipo_local_id}}
            </td>
            <td>
                {{$partido->equipo_visitante_id}}
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{route('partido.edit', $partido->id)}}" class="btn btn-outline-primary">Editar</a>
                    <a href="{{route('partido.destroy', $partido->id)}}" class="btn btn-outline-primary">Eliminar</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
