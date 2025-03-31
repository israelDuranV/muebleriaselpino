<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Terminado
 * 
 * @property int $terminado_id
 * @property string|null $terminado
 * @property string|null $descripcion
 * 
 * @property Collection|Mueble[] $muebles
 *
 * @package App\Models
 */
class Terminado extends Model
{
	protected $table = 'terminado';
	protected $primaryKey = 'terminado_id';
	public $timestamps = false;

	protected $fillable = [
		'terminado',
		'descripcion'
	];

	public function muebles()
	{
		return $this->hasMany(Mueble::class);
	}
}
