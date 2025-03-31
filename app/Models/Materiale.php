<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 * 
 * @property int $materiales_id
 * @property string|null $material
 * @property string|null $descripcion
 * 
 * @property Collection|Mueble[] $muebles
 *
 * @package App\Models
 */
class Materiale extends Model
{
	protected $table = 'materiales';
	protected $primaryKey = 'materiales_id';
	public $timestamps = false;

	protected $fillable = [
		'material',
		'descripcion'
	];

	public function muebles()
	{
		return $this->hasMany(Mueble::class, 'materiales_id');
	}
}
