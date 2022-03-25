@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    @can('edit')
    <nav class="navbar">
        <a href="{{route('partido.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Partidos</a>
    </nav>
    @endcan

    <div class="row mb-3">
        <p><strong>Equipo Local:</strong> {{App\Models\Equipo::find($partido->equipo_local_id)->nombre}}</p>
        <p><strong> Equipo Visitante:</strong>  {{App\Models\Equipo::find($partido->equipo_visitante_id)->nombre}}</p>
        <p><strong> Marcador:</strong>  {{$partido->marcador_local}} {{'-'}} {{$partido->marcador_visitante}}</p>
    </div>

    <a href="{{route('partido.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Partidos</a>

@endsection
