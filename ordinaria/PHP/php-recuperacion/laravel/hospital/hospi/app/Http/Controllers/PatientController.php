<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //coger solo 10
      $patients=Patient::take(10)->orderBy('name')->get();
      return view('patients.index', compact('patients'));  

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
            'nombre'=>'required|string|max:255',
        'historial'=>'required|string|max:255',
      ]);
      Patient::create($data);
      return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
   return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
   $data=$request->validate([
    'nombre'=>'required|string|max:255',
    'historial'=>'required|string|max:255',
   ]);
   $patient->update($data);
   return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        
    }
}
