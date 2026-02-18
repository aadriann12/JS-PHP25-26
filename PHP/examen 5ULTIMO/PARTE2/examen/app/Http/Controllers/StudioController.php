<?php

namespace App\Http\Controllers;
use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studios=Studio::all();
        return response()->json([
            'success'=>true,
            'message'=>'listado',
            'data'=>$studios
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data=$request->validate([
'name'=>'required|string',
'country'=>'required|string'

]);

$studio=Studio::create($data);

return response()->json([
  'success'=>true,
            'message'=>'creado',

            'data'=>$studio
]);

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studio $studio)
    {
     $data=$request->validate([
'name'=>'required|string',
'country'=>'required|string'

]);

$studio->update($data);

return response()->json([
  'success'=>true,
            'message'=>'actualizado',

            'data'=>$studio
]);

    }


}
