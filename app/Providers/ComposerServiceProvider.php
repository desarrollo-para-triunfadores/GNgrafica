<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers
        ([
            'App\Http\ViewComposers\ConfiguracionComposer' => 'admin.configuracion.contenidoForm',
            'App\Http\ViewComposers\InterfazComposer' => 'admin.partes.navTop',

            'App\Http\ViewComposers\ArticuloComposer' => ['admin.articulos.contenidoForm', 'admin.articulos.cabeceraTabla', 'front.articulos.cabeceraTabla'],
            'App\Http\ViewComposers\ProveedorComposer' => ['admin.proveedores.contenidoForm', 'admin.proveedores.cabeceraTabla'],

        ]);   
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
