@extends('layouts.plantillabase')
@section('title', 'Clubs')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('club.create')}}">Crear club</a>
        </div>
    </nav>

    <h4>Clubs</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($clubs as $club)
            <tr>
                <th scope="row">{{$club->id}}</th>
                <td>
                    {{$club->nombre}}
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{route('club.show', $club->id)}}" class="btn btn-outline-primary">Ver</a>
                        <a href="{{route('club.edit', $club->id)}}" class="btn btn-outline-primary">Editar</a>
                        <a href="{{route('club.destroy', $club->id)}}" class="btn btn-outline-primary">Eliminar</a>
                    </div>
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('equipo.create', $club->id)}}" class="btn btn-outline-primary">Añadir Equipo</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--{{$clubs->links()}}--}}
@endsection
