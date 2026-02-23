<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Artist;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//DEVUELVE VISTA
    {
   $albums=Album::with('artist')->take(10)->orderBy('titulo')->get();
   return view('albums.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//devuelve vista
    {
     return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
        'titulo'=>'required|string',
        'anio'=>'required|integer',
        'artist_id'=>'required|exists:artists,id',
        'precio'=>'required|numeric'
      ]);
      Album::create($data);
      return redirect()->route('albums.index')->with('success','Album creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
       return view('albums.show',compact('album'))->with('success','Album mostrado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)//VISTA
    {//album con
     return view('albums.edit',compact('album'))->with('success','Formulario de edición de album mostrado exitosamente');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)//REDIRECT RUTA
    {
        $data = $request->validate([
            'titulo' => 'required|string',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'artist_id' => 'required|exists:artists,id',
            'precio' => 'required|numeric'
        ]);
   //si no cumple las validaciones, laravel redirige automaticamente a la pagina anterior con los errores en la session, por eso no hace falta un if para comprobar si hay errores, laravel lo hace automaticamente

        $album->update($data);
        return redirect()->route('albums.index')->with('success', 'Album actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album eliminado exitosamente');
    }
}
