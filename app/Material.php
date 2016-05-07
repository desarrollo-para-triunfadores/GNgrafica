<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table =  "materiales";

    protected $fillable = ['nombre'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}
