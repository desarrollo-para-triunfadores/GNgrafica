<div id="modal-actualizar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                    &times;</button>
                <h4 class="modal-title">
                    Actualizar Registro: {{ $empresa->nombre }}</h4>
            </div>
            <div class="modal-body">   
                @if ($errors->any())
                     @include('admin.partes.listaErrores')
                @else
                    @include('admin.partes.msgLogoActualizar')
                @endif                        
{!! Form::model($empresa, ['route' => ['admin.empresas.update', $empresa], 'id' =>'form-actualizar', 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
                            @include('admin.empresas.contenidoForm')               
                        {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-warning btn-block']) !!}  
                        <button type="button" data-dismiss="modal" class="btn btn-white btn-block">
                        Cerrar</button>                                                                                                    
                {!! Form::close() !!}
            </div>                        
        </div>
    </div>
</div>