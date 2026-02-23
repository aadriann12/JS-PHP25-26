<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','cupo_maximo','trainer_id'];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class,'gym_class_members')->withPivot('fecha_inscripcion')->withTimestamps(); 
    }  
    public function estaLlena(){
        return $this->members()->count()>=$this->cupo_maximo;
    } 
}
