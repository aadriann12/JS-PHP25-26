<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Car_Pilot extends Model
{
protected $fillable=[
    'car_id',
    'pilot_id',
    'fecha_sesion',
];

}
