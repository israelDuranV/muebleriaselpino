<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $roles_id
 * @property string|null $rol
 * @property string|null $descripcion
 * 
 * @property Collection|Permiso[] $permisos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'roles_id';
	public $timestamps = false;

	protected $fillable = [
		'rol',
		'descripcion'
	];

	public function permisos()
	{
		return $this->hasMany(Permiso::class, 'roles_id');
	}

	public function users()
	{
		return $this->hasMany(Usuario::class, 'roles_id');
	}
}
