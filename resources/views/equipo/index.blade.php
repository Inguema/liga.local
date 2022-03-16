@extends('layouts.plantillabase')
@section('title', 'Equipos')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('equipo.create')}}">Crear equipo</a>
        </div>
    </nav>

    <h4>Equipos</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Equipo</th>
            <th scope="col">Id Club</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
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
                        <a href="{{route('equipo.show', $equipo->id)}}" class="btn btn-outline-primary">Ver</a>>
                        <a href="{{route('equipo.edit', $equipo->id)}}" class="btn btn-outline-primary">Editar</a>>
                        <a href="{{route('equipo.destroy', $equipo->id)}}" class="btn btn-outline-primary">Eliminar</a>>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    {{$clubs->links()}}--}}

@endsection
