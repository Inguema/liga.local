@extends('layouts.plantillabase')
@section('title', 'Partidos')

@section('content')
    <nav class="navbar">
        <a href="{{route('partido.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Partidos</a>
    </nav>
    <br>
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
            <label for="marcador_local" class="form-label"><strong> Marcador Local</strong> </label>
            <input name="marcador_local" type="number" value="" class="form-control">
            @error('marcador_local')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
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
            <label for="marcador_visitante" class="form-label"><strong> Marcador Visitante</strong></label>
            <input name="marcador_visitante" type="number" value="" class="form-control">
            @error('marcador_visitante')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
        <a href="{{route('partido.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Partidos</a>
    </form>
@endsection

