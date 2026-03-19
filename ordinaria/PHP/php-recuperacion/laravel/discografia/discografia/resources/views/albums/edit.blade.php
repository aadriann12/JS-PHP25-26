@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Álbum</h1>
        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            @method('PUT')<!-- IMPORTANTE PARA QUE SEPA QUE ES UN UPDATE -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $album->titulo }}" required><!-- IMPORTANTE PARA QUE SE RELLENE EL CAMPO CON EL VALOR ACTUAL -->
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" name="anio" id="anio" class="form-control" value="{{ $album->anio }}" required>
            </div>
            <div class="mb-3">
                <label for="artist_id" class="form-label">ID del Artista ({{ $album->artist->nombre }})</label>
                <input type="number" name="artist_id" id="artist_id" class="form-control" value="{{ $album->artist_id }}" required>
                                 </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ $album->precio }}" required>
            </div>
            <input type="submit" value="Actualizar Álbum" class="btn btn-primary">
            <a href="{{ route('albums.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
