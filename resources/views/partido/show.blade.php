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
    <div class="row mb-3">
        <p>Equipo Local: {{App\Models\Equipo::find($partido->equipo_local_id)->nombre}}</p>
        <p>Equipo Visitante: {{App\Models\Equipo::find($partido->equipo_visitante_id)->nombre}}</p>
        <p>Marcador: {{$partido->marcador_local}} {{'-'}} {{$partido->marcador_visitante}}</p>
    </div>
@endsection
