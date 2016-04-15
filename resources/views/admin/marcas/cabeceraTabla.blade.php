<div id="busqueda" class="panel panel-default hide">
    <div class="panel-body">
        <div class="row col-lg-12"> 
            <div class="col-lg-4">                                         
                <div class="form-group">
                    <label>Nombre</label>
                    {!! Form::select('bus-nombre', array('-1' => 'Cualquier Marca')+$marcaslista, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-nombre']) !!}                                                                                                                                                                                                                                                                                                                                    
                </div>
            </div>
            <div class="col-lg-4">                                         
                <div class="form-group">
                    <label>Empresa</label>
                    {!! Form::select('bus-empresa', array('-1' => 'Cualquier Empresa')+$empresas, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-empresa']) !!}                                                                                                                                                                            
                </div>
            </div>  
            <div class="col-lg-4"> 
                <div class="form-group">
                    <label >Estado</label>
                    {!! Form::select('bus-estado', array('-1' => 'Cualquier Estado', '1' => 'Activo', '0' => 'Inactivo'), null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-estado']) !!}                                                                                                                                                                                   
                </div> 
            </div> 
        </div>  
    </div>
</div>