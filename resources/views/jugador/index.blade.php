@extends('layouts.plantillabase')
@section('title', 'Jugadores')

@section('content')
    <nav class="navbar">
        <a href="{{route('jugador.create')}}" class="btn btn-outline-warning btn-lg active" role="button" aria-pressed="true">Añadir Jugador</a>
    </nav>

    <h1><strong>Listado de Jugadores</strong></h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Posición</th>
            <th scope="col">Equipo</th>
            <th scope="col">Club</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $jugador)
            @php
                if (!empty($jugador)) {
                    $equipo = App\Models\Equipo::find($jugador->equipo_id);
                    $club = App\Models\Club::find($equipo->club_id);
                }
            @endphp
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
                   {{$equipo->nombre}}
                </td>
                <td>
                    {{$club->nombre}}
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('jugador.show', $jugador->id)}}" class="btn btn-outline-primary">Ver</a>
                        <a href="{{route('jugador.edit', $jugador->id)}}" class="btn btn-outline-primary">Editar</a>
                        <a href="{{route('jugador.destroy', $jugador->id)}}" class="btn btn-outline-primary">Eliminar</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$jugadores->links()}}
@endsection
