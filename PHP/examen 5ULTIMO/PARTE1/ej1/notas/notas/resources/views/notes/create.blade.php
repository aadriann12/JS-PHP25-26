@extends('layouts.layout')
@section('content')
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Create Note</button>
    </form>
@endsection
