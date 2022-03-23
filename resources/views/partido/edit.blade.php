@extends('layouts.plantillabase')
@section('title', 'Editar ' . 'Partidos')

@section('content')
    <br>
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
            <label for="marcador_local" class="form-label"><strong>Marcador Local</strong></label>
            <input name="marcador_local" type="number" value="{{$partido->marcador_local}}" class="form-control" required>
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
            <label for="marcador_visitante" class="form-label"><strong>Marcador Visitante</strong></label>
            <input name="marcador_visitante" type="number" value="{{$partido->marcador_visitante}}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-secondary">Guardar</button>
        <a href="{{route('partido.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Partidos</a>
    </form>
@endsection
