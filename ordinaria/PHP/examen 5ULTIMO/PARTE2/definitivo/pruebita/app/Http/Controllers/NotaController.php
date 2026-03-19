<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Nota::all()->map(function ($n) {
            return [
                'title' => $n->titulo,
                'content' => $n->contenido,
            ];
        });

        return response()->json([
            'success' => true,
            'message' => 'lista de notas',
            'data' => $notes,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        

        $note = Nota::create([
            'titulo' => $data['title'],
            'contenido' => $data['content'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'nota creada',
            'data' => [
                'id' => $note->id,
                'title' => $note->titulo,
                'content' => $note->contenido,
                'created_at' => $note->created_at,
                'updated_at' => $note->updated_at,
            ],
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $note)
    {
        return response()->json([
            'success' => true,
            'message' => 'nota encontrada',
            'data' => [
                'id' => $note->id,
                'title' => $note->titulo,
                'content' => $note->contenido,
                'created_at' => $note->created_at,
                'updated_at' => $note->updated_at,
            ],
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $note)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $note->update([
            'titulo' => $data['title'],
            'contenido' => $data['content'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'nota actualizada',
            'data' => [
                'id' => $note->id,
                'title' => $note->titulo,
                'content' => $note->contenido,
                'created_at' => $note->created_at,
                'updated_at' => $note->updated_at,
            ],
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $note)
    {
        $note->delete();

        return response()->json([
            'success' => true,
            'message' => 'nota eliminada',
        ], 200);
    }
}
