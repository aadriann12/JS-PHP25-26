@extends('layouts.layout')
 @section('content')
  <h1>Notes List</h1>
  <a href="{{ route('notes.create') }}">Create New Note</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
               <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td> <button><a href="{{ route('notes.edit', $note->id) }}">Edit</a></button>
                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
 @endsection
