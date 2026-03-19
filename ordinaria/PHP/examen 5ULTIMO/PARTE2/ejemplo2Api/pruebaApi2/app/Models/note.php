<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{


    protected $fillable = [
        'title', // Permite asignación masiva del título
        'content', // Permite asignación masiva del contenido
    ];
}
