<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mueble
 * 
 * @property int $muebles_id
 * @property string|null $nombre
 * @property int|null $materiales_id
 * @property int|null $terminado_id
 * @property int|null $sincera
 * @property int|null $encerado
 * @property int|null $costo
 * @property int|null $barniz
 * @property string|null $fotografia
 * @property int|null $departamento_id
 * @property string|null $observacion
 * @property int|null $stock
 * @property string|null $departamento
 * 
 * @property Materiale|null $materiale
 * @property Terminado|null $terminado
 * @property Collection|Inventario[] $inventarios
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Mueble extends Model
{
	protected $table = 'muebles';
	protected $primaryKey = 'muebles_id';
	public $timestamps = false;

	protected $casts = [
		'materiales_id' => 'int',
		'terminado_id' => 'int',
		'sincera' => 'int',
		'encerado' => 'int',
		'costo' => 'int',
		'barniz' => 'int',
		'departamento_id' => 'int',
		'stock' => 'int'
	];

	protected $fillable = [
		'nombre',
		'materiales_id',
		'terminado_id',
		'sincera',
		'encerado',
		'costo',
		'barniz',
		'fotografia',
		'departamento_id',
		'observacion',
		'stock',
		'departamento'
	];

	public function materiale()
	{
		return $this->belongsTo(Materiale::class, 'materiales_id');
	}

	public function terminado()
	{
		return $this->belongsTo(Terminado::class);
	}

	public function departamento()
	{
		return $this->belongsTo(Departamento::class);
	}

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'muebles_id');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'muebles_id');
	}
}
