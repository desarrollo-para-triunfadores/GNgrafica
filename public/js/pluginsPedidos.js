/*
* Variables para cuando se cargan artículos en la tabla.
*  var numFila: Esta variable identifica a una fila dentro de la tabla. Este dato se utiliza cuando se quiere eliminar un renglón de la tabla.
*  var cantFilas: Esta es una variable de control. Se utiliza cuando se va a poceder con la registración de un pedido o venta. Si esta es igual a 0 (cero) no puede realizarce una registración.
*  var montoPedido: En esta variable se va almacenando de manera actualizada el valor total del pedido. Es modificada cada vez que se agrega o elimina un renglón.
*                   Es calculada a partir de los importes de los renglones.
*/

var numFila = 0;
var cantFilas = 0;
var montoPedido = 0;

/*
* Function constructorTabla2: Este método es el instanciador de la tabla en la página.
* Difiere del método común en que el "lengthMenu" está configurado para que no pagine la
* tabla ya que de hacerlo, al momento de registrar el pedido/venta, dataTable solo tomará los renglones
* que sean visibles al momento de registrar, excluyendo a los que estén paginados en otras páginas.
* Ej: tengo 11 renglones y la tabla muestra solo 10 renglones y crea otra página para mostrar el 11º renglón,
* si al registrar estoy en la pág 1, el 11º registro será ignorado.
*/

function constructorTabla2()
{
  $('#tblListaProductos').DataTable({
    responsive: true,
    "language": {
        "url": "/js/spanish.json"
    },
    "lengthMenu": [[-1], ["Todos"]]
  });
}

/*
* Funtion agregarContenido: Este método recibe parámetros para crear renglones () y crea
* una nueva linea en la tabla de artículos. También agrega otros valores útiles para otros métodos
* como el número de fila que se inserta y un link que dispara el método para borrar esa fila.
* También incrementa el valor del monto del pedido a partir del importe del renglón.
* La tabla funciona como un array y el 1º registro ocupa la posición 0 (cero).
*
* parseFloat: método de javascript para convertir a decimal la variable y usarla para el pertinente cálculo.
*/
function agregarContenido(d1,nombre,d2,d3,d4)
{
  var tPro = $('#tblListaProductos').DataTable();
  cantFilas++;
  numFila++;
  montoPedido = montoPedido + parseFloat(d4);
  tPro.row.add([
      numFila,
      d1,
      nombre,
      d2,
      d3,
      d4,
      ' <a href="javascript:borrarFila(' + numFila + ');" data-toggle="modal"><i class="fa fa-lg fa-trash-o"></i> Borrar</a>   '
  ]).draw();
  $('#mp').html(montoPedido);
  limpiar();
  $('#d2').select();
}

/*
* Function borrarFila: Este método remueve un reglón de la tabla, adicionalmente actualiza los valores "cantFilas"
* y montoPedido. Como parámetro recibe el número de la fila a ser borrada. El método recorre todos los renglones de la tabla
* buscando el número de fila ingresado como parámetro.
* Puede parecer contradictorio que ingrese el número de fila a borrar y busque esa fila recorriendo pero esto resuelve
* un problema que se prensenta cuando ya hay varios renglones y empezamos a borrar renglones, y existen dos o mas renglones que poseen
* prácticamente los mismos datos. O sea que en definitiva el número de fila (numFila) funciona a modo de id de renglón en la vista únicamente.
*/
function borrarFila(d)
{
  var numFilaBorrar = 0;
  var Filas = 0;
    $('#tblListaProductos tbody tr').each(function () {
        var dataPla = $('#tblListaProductos').DataTable().row(this).data();
        if (dataPla[0] === d) {
            numFilaBorrar = Filas;
            montoPedido = montoPedido - parseFloat(dataPla[5]);
        }
        Filas++;
    });
    $('#tblListaProductos').dataTable().fnDeleteRow(numFilaBorrar);
    $('#mp').html(montoPedido);
    cantFilas--;
}

/*
* Function obtenerCantidades: Este método devuelve las cantidades para un tipo de artículo
* que ya fueron ingresados en la tabla. Recibe de parámetro el id del articulo a buscar y la cantidad
* que intereza agregar.
*/
function obtenerCantidades(d, cant)
{
    var cantidad = parseFloat(cant);
    if (cantFilas > 0){
    $('#tblListaProductos tbody tr').each(function () {
          var dataPla = $('#tblListaProductos').DataTable().row(this).data();
          if (dataPla[1] === d) {
              cantidad = cantidad + parseFloat(dataPla[3]);
          }
      });
    }
return cantidad;
}

/*
* Function comprobar: Este método devuelve true si detecta que algún valor (articulo_id, cantidad, importe, precio_unitario)
* se encuentra sin completar. Este método comienza con verificaciones, prosigue solicitando
* a la controladora a través de la id del artículo el nombre del mismo y si es suficiente el stock
* para luego pasar el nombre al método que se encarga de agregar el contenido en la tabla.
*/

function comprobar (d1, d2, d3, d4)
{
    if ((d1 != '')&&(d2 != '')&&(d3 != '')&&(d4 != '')){
       var canti = obtenerCantidades(d1, d2);
       $.ajax({
          url:"/admin/pedidos",
          data:{
            id: d1,
            cantidadSolicitada: canti
          },
          type: 'GET',
          dataType: 'json',
          success: function(data){
            var d = JSON.parse(data);
            if (d.stockSuficiente){
              agregarContenido(d1,d.nombreArticulo,d2,d3,d4);
            } else {
              $('#msjStock').removeClass("hide");
              $("#d2").select();
            }
          }
        });
    } else {
      $("#d2").select();
    }
}

/*
* Function limpiar: Este método resetea los campos cantidad, precio_unitario e importe.
* d2: campo "Cantidad".
* d3: campo "Precio unitario".
* d4: campo "Importe".
*/
function limpiar()
{
     $('#d2').val("");
     $('#d3').val("");
     $('#d4').val("");
}

/*
* Este método jquery captura el evento de cuando se suelta la tecla despues de presionarla sobre
* el campo "Precio unitario" y lanza el método que se encarga de calcular el contenido para el campo "Importe".
*/
$("#d3").keypress(function (){
}).keyup(function () {
    completarPrecio("d4");
});

/*
* Este método jquery captura el evento de cuando se suelta la tecla despues de presionarla sobre
* el campo "Importe" y lanza el método que se encarga de calcular el contenido para el campo "Precio unitario".
*/
$("#d4").keypress(function (){
}).keyup(function () {
   completarPrecio("d3");
});

/*
* Este método jquery captura el evento de cuando se suelta la tecla despues de presionarla sobre
* el campo "Artículo" y verifica si alguno de los campos "Importe" o "Precio unitario" tienen algún
* contenido y a partir de ello lanza el método que se encarga de calcular el contenido para el campo sobrante.
* Este método verifica primero si el campo "Precio unitario" no está vacio. Otro cosa a saber de este método es que
* si ambos campos a verificar se encuentran vacios no hace nada.
*/
$("#d2").keypress(function (){
}).keyup(function () {
  if($('#d3').val()!="")
  {
    completarPrecio("d4");
  } else {
    completarPrecio("d3");
  }
});

/*
* Function completarPrecio: Este método se encarga de completar el valor para un campo a partir de otros dos
* campos. Generalmente el campo "Cantidad" está completo cada vez que se llama a este método y el otro campo
* que se usa es el pasado como parámetro. Si es "Precio unitario" se calcula el importe y viceversa.
* Si el campo "Cantidad" se encuentra vacío este se toma para el cálculo como valor 0 (cero).
*/
function completarPrecio(n)
{
  cantidad = $('#d2').val();
  if (n=="d3"){
    if ($('#d4').val()=="")
    {
      $('#d3').val("");
    } else {
      precio = $('#d4').val();
      importe = precio/cantidad;
      $('#d3').val(importe);
    }
  } else {
    if ($('#d3').val()==""){
      $('#d4').val("");
    } else {
      importe = $('#d3').val();
      $('#d4').val(importe*cantidad);
    }
  }
}

/*
* Este método jquery captura el evento de submit del formulario "Artículos"
* y lanza el método que se encarga de crear un renglón en la tabla.
*/
$("#form-agregar").submit(function (e){
    e.preventDefault();
    comprobar($('#d1').val(), $('#d2').val(), $('#d3').val(), $('#d4').val());
});

/*
* Este método jquery captura el evento de submit del peuqeño formulario que posee los campos
* seña y cliente y lanza el método que solicita confirmación de los datos ingresados.
*/
$("#form-pedido").submit(function (e){
    e.preventDefault();
    confirmar();
});

/*
* Function confirmar: Este método verifica que la tabla contenga al menos un renglón, de ser así
* verifica si el valor de la seña es igual, menor o mayor al monto del pedido. Si es igual lanza un modal el
* cual solicita la confirmación para registrar como pedido o venta. Si es menor solicita confirmación para registrar como pedido.
* Si es mayor informa la exepción.
*/
function confirmar()
{
  if (cantFilas > 0){
    if ($('#sena').val() == montoPedido ){
      $('#modal-confirmarVenta').modal('show');
    }else if ($('#sena').val() < montoPedido) {
      $('#modal-confirmarPedido').modal('show');
    } else {
      $('#msjSena').removeClass("hide");
      $('#sena').select();
    }
  }else{
    $('#msjTblvacia').removeClass("hide");
  }
}

/*
* Function enviarPedido: Este método se encarga de recorrer los renglones de la tabla y empaquetar el contenido de
* interés de cada renglón en un objeto json y añadirlo a un array que se enviará a la controladora con otros datos
* requeridos para realizar el registro de pedido/venta. Por ahora solo lanza un alert advirtiendo de que el método se ejecuto bien.
* Resta dirigir la página hacia la pantalla de pedidos (pendiente).
* El parámetro que ingresa "entregado" es un boolean que solo toma valor true si se trata de la confirmación de una
* venta a través del momodal-confirmarVenta
*/
function enviarPedido(entregado)
{
  var numLi = 0;
  var lineas = [];
    $('#tblListaProductos tbody tr').each(function () {
        var dataFila = $('#tblListaProductos').DataTable().row(this).data();
        var linea = {cantidad : dataFila[3], importe: dataFila[5], precio_unitario: dataFila[4], articulo_id: dataFila[1] };
        lineas [numLi] = linea;
        numLi++;
    });
    $.ajax({
        dataType: 'json',
        url: "/admin/pedidos/create",
        data: {
            renglones: lineas,
            entregado: entregado,
            cliente:  $('#cliente').val(),
            sena:  $('#sena').val()
        },
        success: function(data){
          alert(data);
        }
    });
}
