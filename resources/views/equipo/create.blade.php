@extends('layouts.plantillabase')

@section('title', 'Equipos create')

@section('content')
    <nav class="navbar">
        <a href="{{route('equipo.create')}}" class="btn btn-outline-warning active" role="button" aria-pressed="true">Añadir Equipo</a>
    </nav>

    <form action="{{route('equipo.store')}}" method="post">

        @csrf

        <div class="row mb-3">
            <label for="nombre" class="form-label"><strong>Nombre</strong></label>
            <input type="text" class="form-control" placeholder="Introduzca nombre" name="nombre" value="{{old('nombre')}}">

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>

        <div class="row mb-3">
            <select class="form-select" name="club_id" required>
                <option value="">Seleccione un club</option>
                @foreach($clubs as $club)
                    <option value="{{$club->id}}">{{$club->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-secondary">Enviar</button>

    </form>
@endsection

