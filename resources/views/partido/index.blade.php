@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('partido.create')}}">Partido Nuevo</a>
        </div>
    </nav>

    <h4>Partidos</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Equipo Local</th>
            <th scope="col">Equipo Visitante</th>
            <th scope="col">Marcador</th>
            <th scope="col"></th>
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
                        <a href="{{route('partido.edit', $partido->id)}}" class="btn btn-outline-primary">Editar</a>
                        <a href="{{route('partido.destroy', $partido->id)}}" class="btn btn-outline-primary">Eliminar</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    {{$clubs->links()}}--}}

@endsection
