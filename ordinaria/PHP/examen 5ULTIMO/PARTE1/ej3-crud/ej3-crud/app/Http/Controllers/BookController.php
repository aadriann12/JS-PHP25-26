<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $book = new Book();
      $data = $request->validate([
          'title' => 'required|string|max:255',
          'description' => 'nullable|string',
          'publication_year' => 'required|integer',
          'author_id' => 'required|exists:authors,id',
          'category_id' => 'required|exists:categories,id',
      ]);
      $book->title= $data['title'];
      $book->description= $data['description'] ?? null;
      $book->publication_year= $data['publication_year'];
      $book->author_id= $data['author_id'];
      $book->category_id= $data['category_id'];
      $book->save();
      return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
         return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
     $libro=$request->validate([
         'title' => 'required|string|max:255',
         'description' => 'nullable|string',
         'publication_year' => 'required|integer',
         'author_id' => 'required|exists:authors,id',
         'category_id' => 'required|exists:categories,id',
     ]);
      $book->title= $libro['title'];
      $book->description= $libro['description'] ?? null;
      $book->publication_year= $libro['publication_year'];
      $book->author_id= $libro['author_id'];
      $book->category_id= $libro['category_id'];
      $book->save();
      return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
