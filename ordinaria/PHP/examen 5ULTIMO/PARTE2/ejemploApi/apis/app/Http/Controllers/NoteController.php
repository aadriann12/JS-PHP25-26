<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return response()->json([
            'success'=>true,
            'data'=>$notes],200);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);
        $note = Note::create($data);
        return response()->json([
            'success'=>true,
            'message'=>'nota creada',
            'data'=>$note],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
return response()->json([
'success'=>true,
'data'=>$note

],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, Note $note)
    {
        $data = $request->validated();
        $note->update($data);
        return response()->json([

'success'=>true,
'message'=>'nota actualizada',
'data'=>$note


        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json([
'success'=>true,
'message'=>'nota eliminada'
        ],200);
    }
}
