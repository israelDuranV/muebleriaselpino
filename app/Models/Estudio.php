<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudio
 * 
 * @property int $id
 *  * @property string|null $banco
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class Estudio extends Model
{
	protected $table = 'estudios';

	protected $fillable = [
		'name',
		'description'
	];
}
