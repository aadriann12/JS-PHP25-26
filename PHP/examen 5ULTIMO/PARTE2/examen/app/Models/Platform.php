<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name'];

    public function videogames()
    {
        return $this->belongsToMany(Videogame::class);
    }
}
