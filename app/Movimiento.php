<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
	protected $table =  "movimientos";

    protected $fillable = ['concepto', 'venta_id', 'monto', 'tipo', 'fecha', 'hora'];
    
}
