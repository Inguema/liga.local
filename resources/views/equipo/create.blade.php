@extends('layouts.plantillabase')

@section('title', 'Equipos create')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('equipo.create')}}">Crear equipo</a>
            <a class="navbar-brand" href="{{route('equipo.index')}}">Volver a equipos</a>
        </div>
    </nav>

    <h4>Crear Equipos</h4>

    <form action="{{route('equipo.store')}}" method="post">

        @csrf

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Introduzca un nombre" name="nombre" required>

{{--            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror--}}
        </div>

        <div class="row mb-3">
            <select class="form-select" name="club_id" required>
                <option value="">Seleccione un club</option>
                @foreach($clubs as $club)
                    <option value="{{$club->id}}">{{$club->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-info">Enviar formulario</button>

    </form>
@endsection

