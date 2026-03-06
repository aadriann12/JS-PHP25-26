@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $movie->titulo }}</h1>
        <p><strong>Año:</strong> {{ $movie->anio }}</p>
        <p><strong>Director:</strong> {{ $movie->director->nombre }}</p> <!-- Asumiendo que el modelo Director tiene un campo 'nombre' -->
        <p><strong>Precio de Alquiler:</strong> {{ $movie->precio_alquiler }}</p>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
@endsection
