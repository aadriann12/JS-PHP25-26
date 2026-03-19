<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $books=Book::with('author','categories')->get();
       return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
$categories=Category::all();
$authors=Author::all();

        return view('books.create',compact('categories','authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
        'title'=>'required|max:255|min:3',
        'publication_year'=>'required|integer',
        'author_id'=>'required|exists:authors,id',
        'category_id'=>'required|exists:categories,id',
       ]);
       $book=Book::create($data);
       //attach
       $book->categories()->attach($request->category_id);

       return redirect()->route('books.index')->with('message','Libro creado correctamente');
    }
}

