@extends('layouts.plantillabase')
@section('title', 'Jugador ' . $jugador->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('jugador.create')}}">Añadir jugador</a>
            <a class="navbar-brand" href="{{route('jugador.index')}}">Volver a jugadores</a>
        </div>
    </nav>

    <h4>Jugador {{$jugador->nombre}}{{' '}}{{$jugador->apellidos}}</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Posición</th>
            <th scope="col">Id Equipo</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$jugador->id}}</th>
            <td>
                {{$jugador->nombre}}
            </td>
            <td>
                {{$jugador->apellidos}}
            </td>
            <td>
                {{$jugador->posicion}}
            </td>
            <td>
                {{$jugador->equipo_id}}
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{route('jugador.edit', $jugador->id)}}" class="btn btn-outline-primary">Editar</a>
                    <a href="{{route('jugador.destroy', $jugador->id)}}" class="btn btn-outline-primary">Eliminar</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

@endsection
