<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Car;
use App\Models\Pilot;
use App\Models\Category;
class CarController extends Controller
{
  public function index(){
    $cars=Car::take(10)->orderBy('id')->with('category')->get();

    return view('cars.index',compact('cars'));
  public function index(){
    $cars=Car::take(10)->orderBy('id')->get();
    $categories=Category::all();
    $pilots=Pilot::all();
    return view('cars.index',compact('cars','categories','pilots'));

  }
    public function create()
    {
       $categories=Category::all();
       $pilots=Pilot::all();
       return view('cars.create',compact('categories','pilots'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'modelo'=>'required|max:255|min:3',
        'chasis'=>'required|unique:cars|max:255|min:3'. $request->id,
        'chasis'=>'required|unique:cars|max:255|min:3',
        'category_id'=>'required',
       ]);
       Car::create($data);
       return redirect()->route('cars.index')->with('message','coche creado');
       $car=Car::create($data);
       if($request->has('pilots')){
        $car->pilots()->attach($request->pilots);
       }
       return redirect()->route('cars.index')->with('message','Coche creado correctamente');
    }



    /**
     * Show the form for editing the specified resource.
     */
  public function edit(Car $car)
{
    // CARGA los pilotos para que la relación no esté vacía en la vista
    $car->load('pilots');
    $categories = Category::all();
    $pilots = Pilot::all();
    return view('cars.edit', compact('car', 'categories', 'pilots'));
}

public function update(Request $request, Car $car)
{
    $data = $request->validate([
        'modelo' => 'required|max:255|min:3',
        // CORRECCIÓN: La coma va antes del ID y después del nombre de la tabla
        'chasis' => 'required|max:255|min:3|unique:cars,chasis,' . $car->id,
        'category_id' => 'required',
    ]);

    $car->update($data);
    return redirect()->route('cars.index')->with('message','coche actualizado');
    }

    $car->pilots()->sync($request->pilots ?? []);

    return redirect()->route('cars.index')->with('message', 'Coche actualizado correctamente');
}


public function destroy(Car $car){
    $car->delete();
    return redirect()->route('cars.index')->with('message','coche eliminado ');
}

}
