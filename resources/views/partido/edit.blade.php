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
            <label for="equipo_local_id" class="form-label">Equipo Local</label>
            <input type="text" class="form-control" placeholder="Introduzca Equipo Local" name="equipo_local_id" required>
        </div>

        <div class="row mb-3">
            <label for="equipo_visitante_id" class="form-label">Equipo Visitante</label>
            <input type="text" class="form-control" placeholder="Introduzca Equipo Local" name="equipo_visitante_id" required>
        </div>

        <div class="row mb-3">
            <label for="marcador" class="form-label">Marcador</label>
            <input type="text" class="form-control" placeholder="Resultado" name="marcador" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
