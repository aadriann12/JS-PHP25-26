@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Álbum</h1>
        <form action="{{ route('albums.store') }}" method="POST">
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
                <label for="artist_id" class="form-label">ID del Artista</label>
                <input type="number" name="artist_id" id="artist_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" required>
            </div>
            <input type="submit" value="Crear Álbum" class="btn btn-primary">
            <a href="{{ route('albums.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
