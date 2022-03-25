@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    @can('edit')
    <nav class="navbar">
        <a href="{{route('partido.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Partidos</a>
    </nav>
    @endcan

    <h1><strong>Listado de Partidos</strong></h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Equipo Local</th>
            <th scope="col">Equipo Visitante</th>
            <th scope="col">Marcador</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partidos as $partido)
            <tr>
                <th scope="row">{{$partido->id}}</th>
                <td>
                    {{App\Models\Equipo::find($partido->equipo_local_id)->nombre}}
                </td>
                <td>
                    {{App\Models\Equipo::find($partido->equipo_visitante_id)->nombre}}
                </td>
                <td>
                    {{$partido->marcador_local}} {{'-'}} {{$partido->marcador_visitante}}
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{route('partido.show', $partido->id)}}" class="btn btn-outline-primary">Ver</a>
                        @can('edit')
                            <a href="{{route('partido.edit', $partido->id)}}" class="btn btn-outline-primary">Editar</a>
                            <a href="{{route('partido.destroy', $partido->id)}}" class="btn btn-outline-primary">Eliminar</a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{$partidos->links()}}
@endsection
