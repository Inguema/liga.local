@extends('layouts.plantillabase')

@section('title', 'Editar ' . $club->nombre)

@section('content')
    <br>
    <form action="{{route('club.update', $club->id)}}" method="post">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label for="nombre" class="form-label"><strong>Nombre</strong></label>
            <input name="nombre" type="text" value="{{old('nombre', $club->nombre)}}">

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>
        <button type="submit" class="btn btn-secondary">Guardar</button>
    </form>
@endsection
