<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dish;
class dishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
     return response()->json([
        'success' => true,
        'message' => 'Lista de platos',
        'data' => $dishes
     ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validaye([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
        ]);
        $dish=new Dish;
        $dish->name=$request->name;
        $dish->description=$request->description;
        $dish->price=$request->price;
        $dish->save();
        return response()->json([
            'success'=>true,
            'message'=>'Plato creado',
            'data'=>$dish
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
response()->json([
'success'=>true,
'message'=>'Detalle del plato',
'data'=>$dish
],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
        ]);
        $dish->name=$request->name;
        $dish->description=$request->description;
        $dish->price=$request->price;
        $dish->save();
        return response()->json([
            'success'=>true,
            'message'=>'Plato actualizado',
            'data'=>$dish
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Plato eliminado'
        ],200);
    }
}
