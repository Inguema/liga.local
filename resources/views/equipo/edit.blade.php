@extends('layouts.plantillabase')

@section('title', 'Editar ' . $equipo->nombre)

@section('content')
    <br>
    <form action="{{route('equipo.update', $equipo->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label"><strong>Nombre Equipo</strong></label>
            <input name="nombre" type="text" value="{{old('nombre', $equipo->nombre)}}">

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>
        <button type="submit" class="btn btn-secondary">Guardar</button>
        <a href="{{route('equipo.index')}}" class="btn btn-secondary" role="button" aria-pressed="true">Volver a Equipos</a>
    </form>
@endsection
