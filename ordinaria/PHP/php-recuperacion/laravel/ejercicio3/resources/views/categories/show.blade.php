@extends('layouts.layout')

@section('content')
<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <a href="{{ route('categories.index') }}" class="btn btn-outline" style="padding: 0.5rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </a>
            <h1>Categoría: {{ $category->name }}</h1>
        </div>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline" style="color: var(--primary); border-color: rgba(139, 92, 246, 0.4);">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            Editar
        </a>
    </div>

    <div class="card" style="margin-bottom: 2rem;">
        <h3 style="color: var(--text-muted); text-transform: uppercase; font-size: 0.75rem; margin-bottom: 0.5rem; letter-spacing: 0.1em;">Descripción</h3>
        <p style="font-size: 1.25rem; line-height: 1.6;">{{ $category->description }}</p>
    </div>

    <h2 style="margin-bottom: 1.5rem;">Libros en esta categoría</h2>
    <div class="card">
        @if($category->books->isEmpty())
            <p style="color: var(--text-muted); text-align: center; padding: 2rem;">No hay libros en esta categoría todavía.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Año</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category->books as $book)
                    <tr>
                        <td style="font-weight: 600;">{{ $book->title }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>{{ $book->publication_year }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline" style="padding: 0.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
