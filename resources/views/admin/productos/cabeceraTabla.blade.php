<div id="busqueda" class="panel panel-default hide">
    <div class="panel-body">
        <div class="row col-lg-12"> 
            <div class="col-lg-4">                                         
                <div class="form-group">
                    <label>Nombre</label>
                    {!! Form::select('bus-nombre', array('-1' => 'Cualquier Producto')+$productoslista, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-nombre']) !!}                                                                                                                                                                                                                                                                                                                                    
                </div>
            </div>
            <div class="col-lg-2">                                         
                <div class="form-group">
                    <label>Marca</label>
                    {!! Form::select('bus-marca', array('-1' => 'Cualquier Marca')+$marcas, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-marca']) !!}                                                                                                                                                                            
                </div>
            </div> 
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Tipo de Producto</label>
                    {!! Form::select('bus-tipo', array('-1' => 'Cualquier Tipo')+$tipos, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-tipo']) !!}                                                                                                                                                                                                                     
                </div>   
            </div> 
            <div class="col-lg-2"> 
                <div class="form-group">
                    <label>Origen</label>
                    {!! Form::select('bus-origen', array('-1' => 'Cualquier Origen')+$localidades, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-origen']) !!}                                                                                                                                                                                                                                                                      
                </div> 
            </div> 
            <div class="col-lg-2"> 
                <div class="form-group">
                    <label >Estado</label>
                    {!! Form::select('bus-estado', array('-1' => 'Cualquier Estado', '1' => 'Activo', '0' => 'Inactivo'), null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar()', 'id' => 'bus-estado']) !!}                                                                                                                                                                                   
                </div> 
            </div> 
        </div>  
    </div>
</div>