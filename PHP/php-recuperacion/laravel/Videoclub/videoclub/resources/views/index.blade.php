@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Bienvenido al Videoclub</h1>
        <p>Explora nuestra colección de películas y disfruta de una experiencia cinematográfica única.</p>
    <a href="{{ url('/movies') }}" class="btn btn-primary">Ver Películas</a>
    </div>
@endsection
