@extends('layouts.plantillabase')
@section('title', 'Editar ' . 'Partidos')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('partido.create')}}">Partido Nuevo</a>
            <a class="navbar-brand" href="{{route('partido.index')}}">Volver a partidos</a>
        </div>
    </nav>

    <h4>Modificar Partido</h4>

    <form action="{{route('partido.update', $partido->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <select class="form-select" name="equipo_local_id" required>
                <option value="">Seleccione Equipo Local</option>
                @foreach($equipos as $equipo)
                    @if($equipo->id === $partido->equipo_local_id)
                        <option value="{{$equipo->id}}" selected>{{$equipo->nombre}}</option>
                    @else
                        <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <label for="marcador_local" class="form-label">Marcador Local</label>
            <input name="marcador_local" type="number" value="{{$partido->marcador_local}}" class="form-control">
        </div>
        <div class="row mb-3">
            <select class="form-select" name="equipo_visitante_id" required>
                <option value="">Seleccione Equipo Visitante</option>
                @foreach($equipos as $equipo)
                    @if($equipo->id === $partido->equipo_visitante_id)
                        <option value="{{$equipo->id}}" selected>{{$equipo->nombre}}</option>
                    @else
                        <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <label for="marcador_visitante" class="form-label">Marcador Visitante</label>
            <input name="marcador_visitante" type="number" value="{{$partido->marcador_visitante}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>
@endsection
