<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Localidad;
use App\Cliente;
use App\ResponIva;

use Carbon\Carbon;
use Laracasts\Flash\Flash;
use League\Flysystem\Adapter\Local;
use App\Http\Requests\ClienteRequestCreate;
use App\Http\Requests\ClienteRequestEdit;

class ClientesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es');         // Instancio en Español el manejador de fechas de Laravel
    }

    public function index()
    {
        $clientes = Cliente::all();
        $localidades = Localidad::all()->lists('nombre','id');
        $responIva = ResponIva::all();
        if ($clientes->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.clientes.sinRegistros'); //se devuelve la vista para crear un registro
        } else {
            return view('admin.clientes.tabla')->with('clientes',$clientes)->with('responIva',$responIva)->with('localidades',$localidades); // se devuelven los registros
        }
    }

    public function find (Route $route)
    {
        $this->cliente = Cliente::find($route->getParameter('clientes'));  // proveedores es el atributo que figura junto al nombre de la ruta en el archivo de rutas.
    }

    /*
    public function index()
    {

        $clientes = Cliente::searchNombres($request->nombre)
            ->searchOrigen($request->idorigen)
            ->searchResponsabilidadIVA($request->idresponIva)
            ->orderBy('id','ASC')
            ->paginate();
        if($request->ajax()){ 	//Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('admin.clientes.tabla',compact('clientes'))->render());
        }
        return view('admin.clientes.tabla')->with('clientes',$clientes);



        $clientes = Cliente::all();
        $localidades = Localidad::all()->lists('nombre','id');
        $respon_iva = Respon_iva::all()->lists('nombre','id');

        if ($clientes->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.clientes.sinRegistros')->with('localidades', $localidades); //se devuelve la vista para crear un registro
        } else {
            return view('admin.clientes.tabla')->with('clientes',$clientes)->with('localidades', $localidades)->with('respon_iva', $respon_iva); // se devuelven los registros
        }
    }
*/

    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(ClienteRequestCreate $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->save();
        Flash::success('El cliente "'. $cliente->nombre.' '.$cliente->apellido.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.clientes.index');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        $localidades = Localidad::all()->lists('nombre','id');
        return view('admin.clientes.show')
            ->with('cliente', $cliente)
            ->with('localidades', $localidades);
    }

    public function update(ClienteRequestEdit $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        Flash::success('Los datos del cliente "'. $cliente->nombre.' '.$cliente->apellido.'" ha sido actualizados de forma existosa.');
        return redirect()->route('admin.clientes.show', $id);
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        Flash::error(('Se ha dado de baja al cliente "'. $cliente->nombre.' '.$cliente->apellido.'" de forma existosa.'));

        return redirect()->route('admin.clientes.index');
    }

}
