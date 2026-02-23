<?php

namespace App\Models;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
protected $fillable=['titulo','anio','artist_id','precio'];
public function artist()
{
    return $this->belongsTo(Artist::class);
}    
}
