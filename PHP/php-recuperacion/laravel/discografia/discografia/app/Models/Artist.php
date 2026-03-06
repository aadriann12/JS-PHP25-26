<?php

namespace App\Models;
use App\Models\Album;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
 protected $fillable=['nombre','pais'];
 public function albums(){
    return $this->hasMany(Album::class);//ALBUM CLASS!!!
 }
}
