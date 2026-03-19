@extends('layouts.app')

@section('content')
<a href="{{route('books.create')}}">Crear nuevo libro</a>
@foreach($books as $book)
    <h2>{{$book->title}}</h2>
    <p>{{$book->publication_year}}</p>




@endsection
