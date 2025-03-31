<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $pedidos_id
 * @property int|null $muebles_id
 * @property int|null $usuario_id
 * @property int|null $mueblerias_id
 * @property int|null $cantidad
 * @property int|null $cantidad_inicial
 * @property Carbon|null $fecha
 * @property string|null $descripcion
 * @property Carbon|null $fecha_entrega
 * @property int|null $produccion
 * @property int|null $id_venta
 * @property string|null $comprobante
 * @property int|null $codigo_pedido
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	protected $primaryKey = 'pedidos_id';
	public $timestamps = false;

	protected $casts = [
		'muebles_id' => 'int',
		'usuario_id' => 'int',
		'mueblerias_id' => 'int',
		'cantidad' => 'int',
		'cantidad_inicial' => 'int',
		'fecha' => 'datetime',
		'fecha_entrega' => 'datetime',
		'produccion' => 'int',
		'id_venta' => 'int',
		'codigo_pedido' => 'int'
	];

	protected $fillable = [
		'muebles_id',
		'usuario_id',
		'mueblerias_id',
		'cantidad',
		'cantidad_inicial',
		'fecha',
		'descripcion',
		'fecha_entrega',
		'produccion',
		'id_venta',
		'comprobante',
		'codigo_pedido'
	];
}
