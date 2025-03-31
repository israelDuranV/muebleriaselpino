<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $departamento_id
 * @property string|null $departamento
 * @property string|null $descripcion
 * 
 * @property Collection|Mueble[] $muebles
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamento';
	protected $primaryKey = 'departamento_id';
	public $timestamps = false;

	protected $fillable = [
		'departamento',
		'descripcion'
	];

	public function muebles()
	{
		return $this->hasMany(Mueble::class);
	}
}
