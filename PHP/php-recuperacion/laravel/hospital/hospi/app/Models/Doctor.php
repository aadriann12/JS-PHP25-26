<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  protected $fillable=['nombre','especialidad'];
  public function patients()
  {
    return $this->belongsToMany(Patient::class,'doctor_patients');//el segundo es la tabla intermedia
  }
}
