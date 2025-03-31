<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $usuarios_id
 * @property string|null $usuario
 * @property string|null $alias
 * @property string|null $secret
 * @property string|null $nombres
 * @property string|null $paterno
 * @property string|null $materno
 * @property int|null $telefono
 * @property int|null $sueldo
 * @property string|null $nss
 * @property string|null $curp
 * @property string|null $cartilla
 * @property string|null $licencia
 * @property string|null $rfc
 * @property string|null $estudios
 * @property Carbon|null $fecha_alta
 * @property Carbon|null $fecha_nacimiento
 * @property int|null $fotografia_id
 * @property string|null $fotografia
 * @property string|null $email
 * @property int|null $mueblerias_id
 * @property int|null $direccion_id
 * @property int|null $roles_id
 * @property int|null $calificacion
 * @property string|null $comentario
 * @property string|null $sobremi
 * @property string|null $mueblerias
 * @property int|null $estatus
 * @property int|null $darkmode
 * 
 * @property Fotografium|null $fotografium
 * @property Muebleria|null $muebleria
 * @property Direccion|null $direccion
 * @property Role|null $role
 * @property Collection|Bono[] $bonos
 * @property Collection|Cliente[] $clientes
 * @property Collection|Inventario[] $inventarios
 * @property Collection|Nomina[] $nominas
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'usuarios_id';
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int',
		'sueldo' => 'int',
		'fecha_alta' => 'datetime',
		'fecha_nacimiento' => 'datetime',
		'fotografia_id' => 'int',
		'mueblerias_id' => 'int',
		'direccion_id' => 'int',
		'roles_id' => 'int',
		'calificacion' => 'int',
		'estatus' => 'int',
		'darkmode' => 'int'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'usuario',
		'alias',
		'secret',
		'nombres',
		'paterno',
		'materno',
		'telefono',
		'sueldo',
		'nss',
		'curp',
		'cartilla',
		'licencia',
		'rfc',
		'estudios',
		'fecha_alta',
		'fecha_nacimiento',
		'fotografia_id',
		'fotografia',
		'email',
		'mueblerias_id',
		'direccion_id',
		'roles_id',
		'calificacion',
		'comentario',
		'sobremi',
		'mueblerias',
		'estatus',
		'darkmode'
	];

	public function fotografium()
	{
		return $this->belongsTo(Fotografium::class, 'fotografia_id');
	}

	public function muebleria()
	{
		return $this->belongsTo(Muebleria::class, 'mueblerias_id');
	}

	public function direccion()
	{
		return $this->belongsTo(Direccion::class);
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'roles_id');
	}

	public function bonos()
	{
		return $this->hasMany(Bono::class, 'usuarios_id');
	}

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'usuarios_id');
	}

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'usuarios_id');
	}

	public function nominas()
	{
		return $this->hasMany(Nomina::class, 'usuarios_id');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'usuarios_id');
	}
}
