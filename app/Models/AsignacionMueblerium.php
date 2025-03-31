<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsignacionMueblerium
 * 
 * @property int $id
 * @property int|null $muebleria
 * @property int|null $usuario
 * @property int|null $estatus
 *
 * @package App\Models
 */
class AsignacionMueblerium extends Model
{
	protected $table = 'asignacion_muebleria';
	public $timestamps = false;

	protected $casts = [
		'muebleria' => 'int',
		'usuario' => 'int',
		'estatus' => 'int'
	];

	protected $fillable = [
		'muebleria',
		'usuario',
		'estatus'
	];
}
