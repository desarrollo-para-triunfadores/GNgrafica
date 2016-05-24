<?php namespace App\Http\ViewComposers;

use App\Material;
use App\Talle;
use App\Tipo;
use Illuminate\Contracts\View\View;
use App\Proveedor;
use App\Articulo;

class ArticuloComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $proveedores = Proveedor::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $materiales = Material::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $talles = Talle::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $tipos = Tipo::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $articuloslista = Articulo::orderBy('nombre','ASC')->searchActivos()->lists('nombre','nombre');
        $view->with('articuloslista', json_decode($articuloslista, true))
             ->with('proveedores',json_decode($proveedores, true))
             ->with('materiales',json_decode($materiales, true))
             ->with('talles',json_decode($talles, true))
             ->with('tipos',json_decode($tipos, true));

    }

}