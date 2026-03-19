<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 * 
 * @property int $numero_ejemplar
 * @property string $titulo
 * @property int $anyo_edicion
 * @property float $precio
 * @property Carbon $fecha_adquisicion
 *
 * @package App\Models
 */
class Libro extends Model
{
	protected $table = 'libros';
	protected $primaryKey = 'numero_ejemplar';
	public $timestamps = false;

	protected $casts = [
		'anyo_edicion' => 'int',
		'precio' => 'float',
		'fecha_adquisicion' => 'datetime'
	];

	protected $fillable = [
		'titulo',
		'anyo_edicion',
		'precio',
		'fecha_adquisicion'
	];
}
