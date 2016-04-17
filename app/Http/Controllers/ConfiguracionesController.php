<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Configuracion;
use Laracasts\Flash\Flash;
use App\Http\Requests\PassRequest;
use App\Http\Requests\ConfiguracionRequest;
use Carbon\Carbon;

class ConfiguracionesController extends Controller
{
public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.configuraciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfiguracionRequest $request)
    {
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'configuraciones_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('configuraciones')->put($nombreImagen, \File::get($file));
        }  

        $configuracion = new Configuracion($request->all());
        $configuracion->imagen = $nombreImagen;
        $configuracion->save();

        Flash::success("¡Se ha registrado la configuración de forma existosa!");
        return redirect()->route('admin.configuraciones.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracion = Configuracion::find($id);
        return view('admin.configuracion.show')->with('configuracion',$configuracion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $configuracion = Configuracion::find($id);
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'configuraciones_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('configuraciones')->exists($configuracion->imagen))
             {
                Storage::disk('configuraciones')->delete($configuracion->imagen);   // Borramos la imagen anterior.      
             }
            $configuracion->fill($request->all());
            $configuracion->imagen = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            Storage::disk('configuraciones')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/usuarios   
            $configuracion->save();
            Flash::success("Se ha realizado la actualización del registro de configuración de sistema.");
            return redirect()->route('admin.configuraciones.show', $id);            
        }  
        $configuracion->fill($request->all());
        $configuracion->save();
        Flash::success("Se ha realizado la actualización del registro de configuración de sistema.");
        return redirect()->route('admin.configuraciones.show', $id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
