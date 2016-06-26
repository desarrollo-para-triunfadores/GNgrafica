<div id="modal-confirmarVenta" class="modal fade modalCV" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                    &times;</button>
                <h4 class="modal-title">Confirmar pedido o venta</h4>
            </div>
            <div class="modal-body">
            <div class="note note-info">
                <h4 class="box-heading">¡Atención!</h4>
                <p>Está por reaizar la registración de un nuevo pedido, también se ha detectado que el pedido ha sido señado en su totalidad.
                  puede optar por entregar el pedido y registrar como una venta a este pedido o proseguir y registrar el pedido para su producción.</p>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-white"> Cerrar</button>
            <button type="button" data-dismiss="modal" class="btn btn btn-success" onclick="enviarPedido(true, false);"> Registrar como pedido</button>
            <button type="button" data-dismiss="modal" class="btn btn btn-info" onclick="enviarPedido(true, true);"> Registrar como venta</button>
        </div>
          </div>
    </div>
</div>
