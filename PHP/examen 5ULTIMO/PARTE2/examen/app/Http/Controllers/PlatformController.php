<?php

namespace App\Http\Controllers;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $platforms=Platform::all();
        return response()->json([
            'success'=>true,
            'message'=>'listado',
            'data'=>$platforms
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$data=$request->validate([
'name'=>'required|string'


]);
// $platform=new Platform;
// $platform->name=$data->name;
// $platform->save();
$platform=Platform::create($data);

return response()->json([
  'success'=>true,
            'message'=>'creado',

            'data'=>$platform
]);

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
   $data=$request->validate([
'name'=>'required|string'


]);
$platform->update($data);



return response()->json([
  'success'=>true,
            'message'=>'actualizado',

            'data'=>$platform
]);
    }


}
