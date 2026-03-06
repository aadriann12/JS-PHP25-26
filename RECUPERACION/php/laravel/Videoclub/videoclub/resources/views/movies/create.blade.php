@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Agregar Nueva Película</h1>
    <form action="{{ route('movies.store') }}" method="POST">
      @csrf
        <input type="text" name="titulo" id="titulo" class="form-control" required>
        <input type="number" name="anio" id="anio" class="form-control" required>
        <input type="number" name="director_id" id="director_id" class="form-control" required>
        <input type="number" step="0.01" name="precio_alquiler" id="precio_alquiler" class="form-control" required>
      <input type="submit" value="Agregar Película" class="btn btn-primary">
      <a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
