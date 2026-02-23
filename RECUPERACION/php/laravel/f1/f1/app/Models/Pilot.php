<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
 protected $fillable=[
    'nombre',
    'nacionalidad',
    'puntos',
 ];

 public function cars(){
    return $this->belongsToMany(Car::class)->withPivot('fecha_sesion');
 }

 public function TieneSuperlicencia(){
if ($this->puntos>40) {
  if ($this->nacionalidad=='española') {
   return true;
  } else {
return false;  }
  
} else {
    return false;
}

 }
}
