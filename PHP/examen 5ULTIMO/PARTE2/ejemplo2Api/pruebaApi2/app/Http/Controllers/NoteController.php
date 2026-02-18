<?php

namespace App\Http\Controllers;
use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$notes=Note::all();
return response()->json([
'success'=>true,
'message'=>'Lista de notas',
'data'=>$notes


],200);//200 es el código de estado HTTP para "OK"
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data=$request->validate([
'title'=>'required|string|max:255',
'content'=>'required|string',
      ]);
$note=new Note;
$note->title=$data['title'];
$note->content=$data['content'];
$note->save();
return response()->json([
'success'=>true,
'message'=>'Nota creada',
'data'=>$note
],201);//201 es el código de estado HTTP para "Creado"
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
   return response()->json([
'success'=>true,
'message'=>'Detalle de la nota',
'data'=>$note
],200);//200 es el código de estado HTTP para "OK"
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
      $data=$request->validate([
'title'=>'required|string|max:255',
'content'=>'required|string',
      ]);
$note->title=$data['title'];
$note->content=$data['content'];
$note->save();

return response()->json([
'success'=>true,
'message'=>'Nota actualizada',
'data'=>$note
],200);//200 es el código de estado HTTP para "OK"
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
      $note->delete();
      return response()->json([
        'success'=>true,
        'message'=>'Nota eliminada',
      ],200);//200 es el código de estado HTTP para "OK"
    }
}
