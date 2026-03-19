@extends('layouts.index')


@section('content')
    <h1>Books List</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author ID</th>
                <th>Published Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author_id }}</td>
                    <td>{{ $book->published_year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection