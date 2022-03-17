@extends('layouts.plantillabase')

@section('title', 'Clubs create')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
            <a class="navbar-brand" href="{{route('club.create')}}">Crear club</a>
            <a class="navbar-brand" href="{{route('club.index')}}">Volver a clubs</a>
        </div>
    </nav>

    <h4>Crear Club</h4>

    <form action="{{route('club.store')}}" method="post">

        @csrf

        <div class="row mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Introduzca nombre" name="nombre" value="{{old('nombre')}}">

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>

        <button type="submit" class="btn btn-info">Enviar</button>

    </form>
@endsection

