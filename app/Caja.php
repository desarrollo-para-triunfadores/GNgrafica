<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
	protected $table =  "cajas";

    protected $fillable = ['hora_apertura', 'fecha_lote', 'saldo_inicial', 'hora_cierre', 'total_retirado', 'cerrado', 'saldo_final'];
    
}
