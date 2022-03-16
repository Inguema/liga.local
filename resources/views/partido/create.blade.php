@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('partido.create')}}">Partido Nuevo</a>
            <a class="navbar-brand" href="{{route('partido.index')}}">Volver a equipos</a>
        </div>
    </nav>
    <h4>Partidos</h4>
    <form action="{{route('partido.store')}}" method="post">
        @csrf
        <div class="row mb-3">
            <select class="form-select" name="equipo_local_id" required>
                <option value="">Seleccione Equipo Local</option>
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <label for="marcador_local" class="form-label">Marcador Local</label>
            <input name="marcador_local" type="number" value="" class="form-control">
        </div>
        <div class="row mb-3">
            <select class="form-select" name="equipo_visitante_id" required>
                <option value="">Seleccione Equipo Visitante</option>
                @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <label for="marcador_visitante" class="form-label">Marcador Visitante</label>
            <input name="marcador_visitante" type="number" value="" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>
@endsection

