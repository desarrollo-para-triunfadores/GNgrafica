<?php namespace App\Http\ViewComposers;

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
        $articuloslista = Marca::orderBy('nombre','ASC')->searchActivos()->lists('nombre','nombre');
        $view->with('articuloslista', json_decode($articuloslista, true))
             ->with('proveedores',json_decode($proveedores, true));
    }

}