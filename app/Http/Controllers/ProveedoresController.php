<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proveedor;
use App\Logo_Proveedor;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProveedorRequestCreate;
use App\Http\Requests\ProveedorRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class ProveedoresController extends Controller
{
    public function __construct()
    {
    	Carbon::setlocale('es'); 	// Instancio en Español el manejador de fechas de Laravel
        
    }

    public function index()
    {     
        $proveedores = Proveedor::searchNombres($request->nombre)
        ->searchOrigen($request->idorigen)
        ->searchRubro($request->idrubro)
        ->orderBy('id','ASC')
        ->paginate();
        if($request->ajax()){ 	//Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('admin.proveedores.tablaLogos',compact('proveedores'))->render());
        }
        return view('admin.proveedores.index')->with('proveedores',$proveedores);        
    }


    public function store(ProveedorRequestCreate $request)
    {
        $proveedor = new Proveedor($request->all());
        $proveedor->save();

        //Manipulación de Imágenes...
        $nombreImagen = 'sin imagen';

        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'GN_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('proveedores')->put($nombreImagen, \File::get($file));
        }        

        $imagen = new Logo_Proveedor();
        $imagen->nombre = $nombreImagen;
        $imagen->proveedor()->associate($proveedor);
        $imagen->save();

        Flash::success('El proveedor "'. $proveedor->nombre.'"" ha sido registrado de forma exitosa.');
        return redirect()->route('admin.proveedores.index');
    }


    public function show($id)
    {
    	$proveedor = Proveedor::find($id);
        return view('admin.proveedores.show')->with('proveedor', $proovedor);
    }



    public function update(ProveedorRequestEdit $request, $id)
    {
    	$proveedor = Proveedor::find($id);

        if ($request->file('imagen'))
        {                  
            $logo_proveedor = $proveedor->logo_proveedor;
            $file = $request->file('imagen');        
            $nombreImagen = 'GN_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('proveedores')->exists($logo_proveedor->nombre))
             {
                Storage::disk('proveedores')->delete($logo_proveedor->nombre);   // Borramos la imagen anterior.      
             }
            $logo_proveedor->nombre = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            $logo_proveedor->save();           
            Storage::disk('proveedores')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/empresas   
        }  

        $proveedor->fill($request->all());
        $proveedor->save();
        Flash::success("Se ha realizado la actualización del registro: ".$proveedor->nombre.".");
        return redirect()->route('admin.proveedor.show', $id);
    }

    public function destroy($id)
    {
    	$proveedor = Proveedor::find($id);

        $logo_proveedor = $proveedor->logo_proveedor;
        if ($logo_proveedor->nombre != 'sin imagen')
        {            
            Storage::disk('proveedores')->delete($logo_empresa->nombre); // Borramos la imagen asociada.
        } 
        $proveedor->delete();        
        Flash::error("Se ha realizado la eliminación del registro: ".$proveedor->nombre.".");        
        return redirect()->route('admin.proveedores.index');
    }

}