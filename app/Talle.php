<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talle extends Model
{
    protected $table =  "talles";
    protected $fillable = ['nombre','descripcion'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}
