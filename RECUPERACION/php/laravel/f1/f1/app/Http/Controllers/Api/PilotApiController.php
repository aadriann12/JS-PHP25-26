<?php

namespace App\Http\Controllers\Api;
use App\Models\Pilot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PilotApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $pilots=Pilot::take(10)->orderBy('id')->get();
      return response()->json([
        'success'=>true,
        'data'=>$pilots,
        'message'=>'Lista de pilotos'
      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
        'nombre'=>'required|max:255|min:3',
        'nacionalidad'=>'required|max:255|min:3',
        'puntos'=>'required|numeric',
      ]);
      $pilot=Pilot::create($data);
      return response()->json([
        'success'=>true,
        'data'=>$pilot,
        'message'=>'Piloto creado'
      ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pilot $pilot)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updatePoints(Request $request,Pilot $pilot){
$request->validate([
    'puntos'=>'required|numeric',
]);
$pilot->puntos+=$request->puntos;
$pilot->save();
return response()->json([
    'success'=>true,
    'data'=>$pilot,
    'message'=>'Puntos actualizados'
]);
    }
}
