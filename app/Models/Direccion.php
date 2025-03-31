<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 * 
 * @property int $direccion_id
 * @property string|null $calle
 * @property int|null $numero
 * @property string|null $colonia
 * @property string|null $municipio
 * @property string|null $estado
 * @property int|null $cp
 * @property float|null $longitud
 * @property float|null $latitud
 * @property int|null $fotografia_id
 * @property string|null $referencia
 * 
 * @property Fotografium|null $fotografium
 * @property Collection|Cliente[] $clientes
 * @property Collection|Muebleria[] $mueblerias
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Direccion extends Model
{
	protected $table = 'direccion';
	protected $primaryKey = 'direccion_id';
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'cp' => 'int',
		'longitud' => 'float',
		'latitud' => 'float',
		'fotografia_id' => 'int'
	];

	protected $fillable = [
		'calle',
		'numero',
		'colonia',
		'municipio',
		'estado',
		'cp',
		'longitud',
		'latitud',
		'fotografia_id',
		'referencia'
	];

	public function fotografium()
	{
		return $this->belongsTo(Fotografium::class, 'fotografia_id');
	}

	public function clientes()
	{
		return $this->hasMany(Cliente::class);
	}

	public function mueblerias()
	{
		return $this->hasMany(Muebleria::class);
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class);
	}
}
