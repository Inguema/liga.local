@extends('layouts.plantillabase')
@section('title', 'Equipos')

@section('content')
    <nav class="navbar">
        <a href="{{route('equipo.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Equipo</a>
    </nav>

    <h1><strong>Listado de Equipos</strong></h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Equipo</th>
            <th scope="col">Nombre Club</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            @php
                if (!empty($equipo)) {
                    $club = App\Models\Club::find($equipo->club_id);
                }
            @endphp
            <tr>
                <th scope="row">{{$equipo->id}}</th>
                <td>
                    {{$equipo->nombre}}
                </td>
                <td>
                    {{$club->nombre}}
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('equipo.show', $equipo->id)}}" class="btn btn-outline-primary">Ver</a>
                        <a href="{{route('equipo.edit', $equipo->id)}}" class="btn btn-outline-primary">Editar</a>
                        <a href="{{route('equipo.destroy', $equipo->id)}}" class="btn btn-outline-primary">Eliminar</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$equipos->links()}}
@endsection
