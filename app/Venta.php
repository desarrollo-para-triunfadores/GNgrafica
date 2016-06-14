<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table =  "ventas";

    protected $fillable = ['fecha_pedido', 'hora_pedido', 'fecha_venta', 'hora_venta', 'pagado', 'entregado', 'senado'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function articulos_ventas()
    {
        return $this->hasMany('App\ArticuloVenta');
    }

    public function movimientos()
	  {
    	 return $this->hasMany('App\Movimiento');
    }

    public function importe()
	  {
      $total = 0;
      foreach ($this->articulos_ventas as $av) {
          $total = $total + $av->importe;
      }
       return $total;
    }

    public function scopeSearchPedidos($query)
    {
      $query->where('pagado', 'LIKE', 0)
              ->orWhere(function($query)
              {
                  $query->where('entregado', 'LIKE', 0);
              })
              ->get();
    }
}
