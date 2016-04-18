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
