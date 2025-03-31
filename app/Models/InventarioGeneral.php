<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InventarioGeneral
 * 
 * @property int $inventarios_id
 * @property int|null $muebles_id
 * @property int|null $pedido_id
 * @property int|null $codigo_pedido
 * @property Carbon|null $fecha_produccion
 * @property string|null $descripcion
 * @property Carbon|null $fecha_entrega
 * @property int|null $estatus
 * @property int|null $usuario_id
 * @property int|null $procedencia
 * @property int|null $muebleria_id
 * @property Carbon|null $fecha_comienzo
 * @property Carbon|null $fecha_termino
 * @property Carbon|null $fecha_traspaso
 * @property int|null $id_venta
 * @property int|null $usuario_acepta
 * @property int|null $aceptado
 *
 * @package App\Models
 */
class InventarioGeneral extends Model
{
	protected $table = 'inventario_general';
	protected $primaryKey = 'inventarios_id';
	public $timestamps = false;

	protected $casts = [
		'muebles_id' => 'int',
		'pedido_id' => 'int',
		'codigo_pedido' => 'int',
		'fecha_produccion' => 'datetime',
		'fecha_entrega' => 'datetime',
		'estatus' => 'int',
		'usuario_id' => 'int',
		'procedencia' => 'int',
		'muebleria_id' => 'int',
		'fecha_comienzo' => 'datetime',
		'fecha_termino' => 'datetime',
		'fecha_traspaso' => 'datetime',
		'id_venta' => 'int',
		'usuario_acepta' => 'int',
		'aceptado' => 'int'
	];

	protected $fillable = [
		'muebles_id',
		'pedido_id',
		'codigo_pedido',
		'fecha_produccion',
		'descripcion',
		'fecha_entrega',
		'estatus',
		'usuario_id',
		'procedencia',
		'muebleria_id',
		'fecha_comienzo',
		'fecha_termino',
		'fecha_traspaso',
		'id_venta',
		'usuario_acepta',
		'aceptado'
	];
}
