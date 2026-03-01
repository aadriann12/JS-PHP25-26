@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Agregar Nueva Película</h1>
    <form action="{{ route('movies.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="anio" class="form-label">Año</label>
        <input type="number" name="anio" id="anio" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="director_id" class="form-label">Director ID</label>
        <input type="number" name="director_id" id="director_id" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="precio_alquiler" class="form-label">Precio Alquiler</label>
        <input type="number" step="0.01" name="precio_alquiler" id="precio_alquiler" class="form-control" required>
      </div>
      <input type="submit" value="Agregar Película" class="btn btn-primary">
      <a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
