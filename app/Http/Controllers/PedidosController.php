<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Venta;
use App\Articulo;
use App\ArticuloVenta;
use Laracasts\Flash\Flash;
use App\Http\Requests\VentaRequestCreate;
use App\Http\Requests\VentaRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class PedidosController extends Controller
{
    public function __construct()
    {
      /*
      * Instancio en Español el manejador de fechas de Laravel.
      */
        Carbon::setlocale('es'); //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
       /*
       * 	Si la solicitud fue realizada utilizando ajax se busca y se devuelve nombre del articulo solicitado;
       * sino se devuelve la vista con los registros. (Por ahora paso la vista de hacer pedidos XD)
       */
         if($request->ajax()){
            $articulo = Articulo::find($request->id);
            $datosValidados = array("nombreArticulo"=>$articulo->nombre, "stockSuficiente"=>$articulo->stockSuficiente($request->cantidadSolicitada));
            return response()->json(json_encode($datosValidados, true));
         }
         return view('admin.pedidos.show2');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    /*
    * Primero se recoge en una variable el array de renglones y se crea y se persiste el
    * registro de pedido/venta.
    */
         $arrayRenglones = $request->renglones;
         $fecha =  \Carbon\Carbon::now('America/Buenos_Aires');
         $venta = new Venta();
         $venta->fecha_pedido = $fecha;
         $venta->hora_pedido = $fecha->format('H:i');
         $venta->senado = $request->sena;
         if ($request->pagado == "true"){
           $venta->pagado = 1;
         }
         if ($request->entregado == "true"){
           $venta->entregado = 1;
           $venta->fecha_venta = $fecha;
           $venta->hora_venta = $fecha->format('H:i');
         }
         $venta->save();
    /*
    * Se recorre el array creando a su paso objetos "ArticuloVenta" a partir de los json que se hallan en
    * el array y se persisten. Luego se instancia el articulo en cuestion y se descuenta el stock.
    * Esto tengo que ver alguna forma mejor porque es medio paraguay se me hace, ba creo XD...
    */
         foreach ($arrayRenglones as $clave)
       	 {
            $renglon = new ArticuloVenta();
            $renglon->cantidad = $clave['cantidad'];
            $renglon->importe = $clave['importe'];
            $renglon->precio_unitario = $clave['precio_unitario'];
            $renglon->articulo_id = $clave['articulo_id'];
            $renglon->venta_id = $venta->id;
            $renglon->save();
            $articuloRenglon = Articulo::find($clave['articulo_id']);
            $articuloRenglon->descontarStock($clave['cantidad']);
            $articuloRenglon->save();
       	 }
         return response()->json("Exito!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
