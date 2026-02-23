<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; 
class CarController extends Controller
{
  public function inde(){
    $cars=Car::take(10)->orderBy('id')->get();
    return view('cars.index',compact('cars'));

  }
    public function create()
    {
       return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'modelo'=>'required|max:255|min:3',
        'chasis'=>'required|unique:cars|max:255|min:3'.$car->id,
        'category_id'=>'required',
       ]);
       Car::create($data);
       return redirect()->route('cars.index');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
   return view ('cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
    $data=$request->validate([
'modelo'=>'required|max:255|min:3',
'chasis'=>'required|unique:cars|max:255|min:3',
'category_id'=>'required',
    ]);
    $car->update($data);
    return redirect()->route('cars.index');
    }


 
}
