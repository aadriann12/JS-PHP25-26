@extends('layouts.app')
@section('content')
<h1>Crear libro</h1>
<form action="{{route('books.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" value="{{old('title')}}">
    <input type="text" name="publication_year" placeholder="Año de publicación" value="{{old('publication_year')}}">
    <select name="author_id">
        @foreach($authors as $author)
        <option value="{{$author->id}}" {{old('author_id')==$author->id?'selected':''}}>{{$author->name}}</option>
        @endforeach
    </select>
    <label for="categories">Categorías</label>
    <select name="categories[]" multiple>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{(collect(old('categories'))->contains($category->id)) ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>
@endsection
