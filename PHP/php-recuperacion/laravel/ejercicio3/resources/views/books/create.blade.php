@extends('layouts.layout')

@section('content')
<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 2rem; display: flex; align-items: center; gap: 1rem;">
        <a href="{{ route('books.index') }}" class="btn btn-outline" style="padding: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </a>
        <h1>Agregar Nuevo Libro</h1>
    </div>

    <div class="card">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Título del Libro</label>
                <input type="text" name="title" id="title" placeholder="Ej: Rayuela" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción / Sinopsis</label>
                <textarea name="description" id="description" rows="4" placeholder="Breve resumen del contenido del libro..." required></textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="form-group">
                    <label for="author_id">Autor</label>
                    <select name="author_id" id="author_id" required>
                        <option value="" disabled selected>Selecciona un autor</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select name="category_id" id="category_id" required>
                        <option value="" disabled selected>Selecciona una categoría</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="publication_year">Año de Publicación</label>
                <input type="number" name="publication_year" id="publication_year" min="1000" max="{{ date('Y') }}" placeholder="Ej: 1963" required>
            </div>

            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <button type="submit" class="btn btn-primary" style="flex: 1;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    Guardar Libro
                </button>
                <a href="{{ route('books.index') }}" class="btn btn-outline">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
