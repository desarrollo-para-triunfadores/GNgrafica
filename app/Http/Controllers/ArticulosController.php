<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticulosController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Espa�ol el manejador de fechas de Laravel
    }

    public function find (Route $route)
    {
        $this->marca = Marca::find($route->getParameter('articulos'));  // marcas es el atributo que figura junto al nombre de la ruta en el archivo de rutas.
    }

    /**
     * Mostrar una lista de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articulos = Articulo::all();
        return view('admin.articulos.tabla')->with('rubros',$articulos);
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Guardo un recurso reci�n creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequestCreate $request)
    {

        //Creaci�n de los registro de Marca.

        $articulo = new Marca($request->all()); // Guardamos los valores cargados en la vista en una variable de tipo marca.
        $articulo->save(); //se almacena en la base de datos.

        Flash::success('La marca "'. $articulo->nombre.'"" ha sido registrada de forma existosa.');
        return redirect()->route('admin.articulos.index');
    }

    /**
     * Visualizar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.articulos.show')->with('articulo', $this->articulo);
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaRequestEdit $request, $id)
    {
        $this->articulo->fill($request->all());

        if ($request->estado == null)
        {
            $this->marca->estado = 0;
            foreach ($this->marca->productos as $producto)
            {
                $producto->estado = 0;
                $producto->save();
            }
        }
        $this->marca->save();
        Flash::success("Se ha realizado la actualizaci�n del registro: ".$this->marca->nombre.".");
        return redirect()->route('admin.marcas.show', $id);
    }

    /**
     * Eliminar el recurso especificado de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->marca->delete(); // Borramos el registro.
        Flash::error("Se ha realizado la eliminaci�n del registro: ".$this->marca->nombre.".");
        return redirect()->route('admin.marcas.index');
    }
}
