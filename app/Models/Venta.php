<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $ventas_id
 * @property int|null $mueblerias_id
 * @property int|null $muebles_id
 * @property int|null $usuarios_id
 * @property int|null $clientes_id
 * @property string|null $forma_pago
 * @property string|null $tipo_pago
 * @property int|null $cantidad
 * @property string|null $color
 * @property int|null $precio
 * @property int|null $descuento
 * @property int|null $tipo_pago_id
 * @property Carbon|null $fecha_venta
 * @property int|null $comision
 * @property Carbon|null $fecha_entrega
 * @property int|null $primer_abono
 * @property int|null $codigo_ventas
 * @property int|null $pagado
 * 
 * @property Muebleria|null $muebleria
 * @property Mueble|null $mueble
 * @property Usuario|null $usuario
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	protected $primaryKey = 'ventas_id';
	public $timestamps = false;

	protected $casts = [
		'mueblerias_id' => 'int',
		'muebles_id' => 'int',
		'usuarios_id' => 'int',
		'clientes_id' => 'int',
		'cantidad' => 'int',
		'precio' => 'int',
		'descuento' => 'int',
		'tipo_pago_id' => 'int',
		'fecha_venta' => 'datetime',
		'comision' => 'int',
		'fecha_entrega' => 'datetime',
		'primer_abono' => 'int',
		'codigo_ventas' => 'int',
		'pagado' => 'int'
	];

	protected $fillable = [
		'mueblerias_id',
		'muebles_id',
		'usuarios_id',
		'clientes_id',
		'forma_pago',
		'tipo_pago',
		'cantidad',
		'color',
		'precio',
		'descuento',
		'tipo_pago_id',
		'fecha_venta',
		'comision',
		'fecha_entrega',
		'primer_abono',
		'codigo_ventas',
		'pagado'
	];

	public function muebleria()
	{
		return $this->belongsTo(Muebleria::class, 'mueblerias_id');
	}

	public function mueble()
	{
		return $this->belongsTo(Mueble::class, 'muebles_id');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'clientes_id');
	}

	public function tipo_pago()
	{
		return $this->belongsTo(TipoPago::class);
	}
}
