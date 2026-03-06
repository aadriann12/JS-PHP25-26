@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Películas</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Agregar Película</a>

        // Mostrar mensaje de éxito después de una operación (crear, actualizar, eliminar)
        @if(session('success'))

                {{ session('success') }}

        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Director</th>
                    <th>Precio Alquiler</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->titulo }}</td>
                        <td>{{ $movie->anio }}</td>
                        <td>{{ $movie->director->nombre }}</td> <!-- Asumiendo que el modelo Director tiene un campo 'nombre' -->
                        <td>{{ $movie->precio_alquiler }}</td>
                        <td>
<!-- Botones para ver, editar y eliminar película -->
                            <a href="{{ route('movies.show', $movie) }}" class="btn btn-info">Ver</a>

                            <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Editar</a>


                        <!-- Formulario para eliminar película -->
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
