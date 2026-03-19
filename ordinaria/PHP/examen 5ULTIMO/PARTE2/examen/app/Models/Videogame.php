<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = ['title', 'year', 'studio_id'];

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
