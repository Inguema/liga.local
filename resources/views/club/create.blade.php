@extends('layouts.plantillabase')

@section('title', 'Clubs create')

@section('content')
    <nav class="navbar">
        <a href="{{route('club.create')}}" class="btn btn-outline-warning btn-lg active" role="button" aria-pressed="true">Añadir Club</a>
    </nav>

    <form action="{{route('club.store')}}" method="post">

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

        <button type="submit" class="btn btn-secondary">Enviar</button>

    </form>
@endsection

