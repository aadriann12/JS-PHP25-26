<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
protected $fillable=['nombre','email','telefono'];

public function gymClasses()
{
    return $this->belongsToMany(GymClass::class,'gym_class_members')->withPivot('fecha_inscripcion')->withTimestamps();
}

}
