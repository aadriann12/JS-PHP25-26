@extends('layouts.layout')

@section('content')
<div style="max-width: 900px; margin: 0 auto;">
    <div style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <a href="{{ route('books.index') }}" class="btn btn-outline" style="padding: 0.5rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </a>
            <h1>Detalles del Libro</h1>
        </div>
        <div class="action-btns">
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-outline" style="color: var(--primary); border-color: rgba(139, 92, 246, 0.4);">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                Editar
            </a>
        </div>
    </div>

    <div class="card" style="display: grid; grid-template-columns: 1fr 2fr; gap: 3rem; align-items: start;">
        <div class="book-cover-placeholder" style="background: linear-gradient(135deg, #1e293b, #0f172a); aspect-ratio: 2/3; border-radius: 1rem; border: 1px solid var(--border); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3);">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem;"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
            <span style="font-weight: 700; color: var(--text-main); font-size: 1.2rem;">{{ $book->title }}</span>
        </div>

        <div>
            <div style="margin-bottom: 2rem;">
                <span style="color: var(--primary); font-weight: 600; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">
                    {{ $book->category->name }}
                </span>
                <h2 style="font-size: 2.5rem; margin-bottom: 0.5rem;">{{ $book->title }}</h2>
                <p style="font-size: 1.25rem; color: var(--text-muted); font-weight: 400;">por {{ $book->author->name }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1.5rem; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); padding: 1.5rem 0; margin-bottom: 2rem;">
                <div>
                    <label style="display: block; color: var(--text-muted); font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.25rem;">Año de Publicación</label>
                    <span style="font-weight: 600; font-size: 1.1rem;">{{ $book->publication_year }}</span>
                </div>
                <div>
                    <label style="display: block; color: var(--text-muted); font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.25rem;">ISBN</label>
                    <span style="font-weight: 600; font-size: 1.1rem;">N/A</span>
                </div>
            </div>

            <div style="line-height: 1.7; color: var(--text-main); font-size: 1.1rem;">
                <h3 style="margin-bottom: 1rem; font-size: 1.2rem;">Sinopsis</h3>
                <p>{{ $book->description }}</p>
            </div>
            
            @if($book->author->biography)
            <div style="margin-top: 3rem; padding: 2rem; background: rgba(139, 92, 246, 0.05); border-radius: 1rem; border: 1px solid rgba(139, 92, 246, 0.1);">
                <h3 style="margin-bottom: 1rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Sobre el autor
                </h3>
                <p style="color: var(--text-muted); font-size: 1rem;">{{ $book->author->biography }}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
