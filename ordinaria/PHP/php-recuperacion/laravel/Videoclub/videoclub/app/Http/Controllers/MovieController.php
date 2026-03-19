<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //solo quiero coger los 10 primeros registros
       $movies = Movie::with('director')->take(10)->get();
       return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'titulo'=>'required|string',
        'anio'=>'required|integer',
        'director_id'=>'required|exists:directors,id',
        'precio_alquiler'=>'required|numeric'
       ]);

       Movie::create($data);
       return redirect()->route('movies.index')->with('success', 'Película creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'titulo' => 'required|string',
            'anio' => 'required|integer',
            'director_id' => 'required|exists:directors,id',
            'precio_alquiler' => 'required|numeric'
        ]);
        $movie->update($data);
        return redirect()->route('movies.index')->with('success', 'Película actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Película eliminada exitosamente.');
    }
}
