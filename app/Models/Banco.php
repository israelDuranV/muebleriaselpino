<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 * 
 * @property int $banco_id
 * @property string|null $banco
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class Banco extends Model
{
	protected $table = 'bancos';
	protected $primaryKey = 'banco_id';
	public $timestamps = false;

	protected $fillable = [
		'banco',
		'descripcion'
	];
}
