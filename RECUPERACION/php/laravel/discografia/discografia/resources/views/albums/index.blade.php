@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <div class="brand">
                <div class="logo">A</div>
                <div>
                    <h1>Álbumes</h1>
                    <p class="muted">Colección de discos</p>
                </div>
            </div>
            <div class="nav">
                <a href="{{ route('albums.create') }}" class="btn primary">Nuevo Álbum</a>
            </div>
        </div>

   

        <div class="card">
            @if($albums->isEmpty())
                <div class="empty">No hay álbumes todavía.</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Año</th>
                            <th>Artista</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($albums as $album)
                            <tr>
                                <td>{{ $album->id }}</td>
                                <td>{{ $album->titulo }}</td>
                                <td>{{ $album->anio }}</td>
                                <td>{{ optional($album->artist)->nombre ?? '-' }}</td>
                                <td>{{ number_format($album->precio, 2) }}</td>
                                <td>
                                    <a href="{{ route('albums.show', $album) }}" class="btn info">Ver</a>
                                    <a href="{{ route('albums.edit', $album) }}" class="btn warning">Editar</a>
                                    <form action="{{ route('albums.destroy', $album) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn danger" onclick="return confirm('¿Seguro que quieres eliminar este álbum?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
