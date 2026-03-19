<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   $book=Book::all();
   return response()->json([
    'success' => true,
    'data' => $book
   ],200)   ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
        'title' => 'required',
        'author' => 'required'
    ]);
    $book=Book::create($data);
    return response()->json([
        'success' => true,
        'data' => $book
    ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json([
            'success' => true,
            'data' => $book
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
     $data=$request->validate([
        'title' => 'required',
        'author' => 'required'
     ]);

     $book->update($data);
        return response()->json([
            'success' => true,
            'data' => $book
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
      $book->delete();
      return response()->json([
        'success' => true,
        'message' => 'libro eliminado correctamente'
      ],204); //204 para delete sin contenido     
    }
}
