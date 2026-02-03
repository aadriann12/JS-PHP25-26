@extends('layouts.index')
@section('content')
    <h1>Create Author</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea>
        </div>
        <button type="submit">Create Author</button>
    </form>
@endsection