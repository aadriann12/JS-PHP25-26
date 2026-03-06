@extends('layouts.layout')

@section('content')
<div class="header-actions" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1>Catálogo de Libros</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        Nuevo Libro
    </a>
</div>

<div class="card">
    @if($books->isEmpty())
        <div style="text-align: center; padding: 3rem;">
            <p style="color: var(--text-muted); font-size: 1.1rem;">No hay libros registrados en la base de datos.</p>
            <a href="{{ route('books.create') }}" class="btn btn-outline" style="margin-top: 1rem;">Agregar el primero</a>
        </div>
    @else
        <div style="overflow-x: auto;">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Categoría</th>
                        <th>Publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td style="font-weight: 600;">{{ $book->title }}</td>
                            <td>{{ $book->author->name }}</td>
                            <td>
                                <span style="background: rgba(139, 92, 246, 0.1); color: var(--primary); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem;">
                                    {{ $book->category->name }}
                                </span>
                            </td>
                            <td>{{ $book->publication_year }}</td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline" style="padding: 0.5rem;" title="Ver">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </a>
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-outline" style="padding: 0.5rem;" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline" style="padding: 0.5rem; color: var(--danger); border-color: rgba(239, 68, 68, 0.2);" title="Eliminar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection