<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['nombre','historial'];
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'doctor_patients');
    }
}
