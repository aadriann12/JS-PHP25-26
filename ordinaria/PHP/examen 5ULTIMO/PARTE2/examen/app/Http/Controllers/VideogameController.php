<?php

namespace App\Http\Controllers;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $videogames=Videogame::all();
        return response()->json([
            'success'=>true,
            'message'=>'listado',
            'data'=>$videogames
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $data=$request->validate([
        'title'=>'string|required',
        'year'=>'integer|required',
        'studio_id'=>'required|exists:studios,id'

]);

$videogame=Videogame::create($data);

return response()->json([
  'success'=>true,
            'message'=>'creado',

            'data'=>$videogame
]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return response()->json([
            'success'=>true,
            'data'=>$videogame
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
 $data=$request->validate([
        'title'=>'string|required',
        'year'=>'integer|required',
        'studio_id'=>'required|exists:studios,id'

]);

$videogame->update($data);

return response()->json([
  'success'=>true,
            'message'=>'actualizado',

            'data'=>$videogame
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
      $videogame->delete();
      return request()->json([
        'success'=>true,
            'message'=>'eliminado',


      ]);
    }
}
