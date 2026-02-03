@extends('layouts.layout')
@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $note->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $note->description }}</textarea>
        </div>
        <button type="submit">Update Note</button>
    </form>
@endsection
