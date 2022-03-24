@extends('layouts.plantillabase')
@section('title', 'Clubs')

@section('content')
    @can('edit')
    <nav class="navbar">
        <a href="{{route('club.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Club</a>
    </nav>
    @endcan

    <h1>
        <strong>Listado de Clubs</strong>
    </h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            @can('edit')
            <th scope="col"></th>
            @endcan
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
                        @can('edit')
                            <a href="{{route('club.edit', $club->id)}}" class="btn btn-outline-primary">Editar</a>
                            <a href="{{route('club.destroy', $club->id)}}" class="btn btn-outline-primary">Eliminar</a>
                        @endcan
                    </div>
                </td>
                @can('edit')
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('equipo.create', $club->id)}}" class="btn btn-warning">Añadir Equipo</a>
                    </div>
                </td>
                @endcan
            </tr>
        @endforeach
        </tbody>
    </table>
{{$clubs->links()}}
@endsection
