<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable=[
    'modelo',
    'chasis',
    'category_id',
 ];

public function category(){
    return $this->belongsTo(Category::class);
 }

 public function pilots(){
    return $this->belongsToMany(Pilot::class)->withPivot('fecha_sesion');
 }
 public function esMutiusos(){
if (    $this->pilots()->count()>3) {
return true;
} else {
return false;
}

 }
}
