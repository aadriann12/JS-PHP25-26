<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
public function store(Request $request){
    Book::create($request->all());
    return redirect()->route('index');
}

public function index(){
    $books=Book::all();
    return view('books.index',compact('books'));
}
}
