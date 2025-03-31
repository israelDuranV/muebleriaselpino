<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 * 
 * @property int $reditos_id
 * @property int|null $contado
 * @property int|null $contado_barn
 * @property int|null $mes
 * @property int|null $tres_meses
 * @property int|null $seis_meses
 * @property Carbon|null $fecha_inicio
 * @property Carbon|null $fecha_final
 * @property string|null $temporada
 *
 * @package App\Models
 */
class Promocione extends Model
{
	protected $table = 'promociones';
	protected $primaryKey = 'reditos_id';
	public $timestamps = false;

	protected $casts = [
		'contado' => 'int',
		'contado_barn' => 'int',
		'mes' => 'int',
		'tres_meses' => 'int',
		'seis_meses' => 'int',
		'fecha_inicio' => 'datetime',
		'fecha_final' => 'datetime'
	];

	protected $fillable = [
		'contado',
		'contado_barn',
		'mes',
		'tres_meses',
		'seis_meses',
		'fecha_inicio',
		'fecha_final',
		'temporada'
	];
}
