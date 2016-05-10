<div id="modal-confirmar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                    &times;</button>
                <h4 class="modal-title">
                    Eliminar Tipo de Producto: {{ $tipo->nombreTipo }}</h4>
            </div>
            @if ($tipo->productos->count()!=0)                                                                                                                                               
                @include('admin.partes.msjRegAsociados')   
            @else
            <div class="modal-body">
                {!! Form::open(['route' => ['admin.tipoproducto.destroy', $tipo], 'method' => 'DELETE']) !!}
                @include('admin.partes.msjConfirmar')                                        
                <hr>
                <div class="pull-right">                                              
                    <button type="button" data-dismiss="modal" class="btn btn-white"> Cerrar</button>                                                              
                    {!! Form::submit('Eliminar registro', ['class' => 'btn btn-danger ']) !!}  
                </div>  
                <br>
                {!! Form::close() !!}  
                <br>
            </div>                    
            @endif             
        </div>
    </div>
</div>