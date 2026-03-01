<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$movies= Movie::with('director')->take(10)->get();
return response()->json([
    'succcess'=>true,
    'data'=>$movies
],200);
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
    return response()->json([
        'success'=>true,
        'message'=>'Película creada exitosamente'
    ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return response()->json([
            'success'=>true,
            'data'=>$movie
        ],200);
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

        return response()->json([
            'success' => true,
            'message' => 'Película actualizada exitosamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
     $movie->delete();
     return response()->json([
        'success'=>true,
        'message'=>'Película eliminada exitosamente'
     ],200);
    }
}
