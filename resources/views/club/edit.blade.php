@extends('layouts.plantillabase');

@section('title', 'Editar ' . $club->nombre)

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('club.create')}}">Crear club</a>
            <a class="navbar-brand" href="{{route('club.index')}}">Volver a clubs</a>
        </div>
    </nav>

    <h4>Modificar {{$club->nombre}}</h4>

    <form action="{{route('club.update', $club->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre Club</label>
            <input name="nombre" type="text" value="{{$club->nombre}}">

 {{--           @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror--}}
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
