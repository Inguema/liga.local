@extends('layouts.plantillabase')

@section('title', 'Editar ' . $equipo->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('equipo.create')}}">Crear equipo</a>
            <a class="navbar-brand" href="{{route('equipo.index')}}">Volver a equipos</a>
        </div>
    </nav>

    <h4>Modificar {{$equipo->nombre}}</h4>

    <form action="{{route('equipo.update', $equipo->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre Equipo</label>
            <input name="nombre" type="text" value="{{old('nombre', $equipo->nombre)}}">

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
