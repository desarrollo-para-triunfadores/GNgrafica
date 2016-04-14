<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table =  "ventas";

    protected $fillable = ['fecha_pedido', 'hora_pedido', 'fecha_venta', 'hora_venta', 'pagado', 'entregado', 'senado'];
}
