@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Detalles del Álbum</h1>
        <div class="card">
            <div class="card-body">
                <h2>{{ $album->titulo }}</h2>
                <p><strong>Año:</strong> {{ $album->anio }}</p>
                <p><strong>Artista:</strong> {{ optional($album->artist)->nombre ?? 'Desconocido' }}</p>
                <p><strong>Precio:</strong> {{ number_format($album->precio, 2) }} €</p>
                <a href="{{ route('albums.index') }}" class="btn btn-secondary">Volver a la Lista</a>
            </div>
        </div>
    </div>


@endsection
