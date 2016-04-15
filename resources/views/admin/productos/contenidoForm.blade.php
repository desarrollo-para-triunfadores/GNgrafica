<h3>Información General</h3>
<br>
<div class="form-group"><label class="col-sm-3 control-label">Nombre</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'required']) !!}                                
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="form-group"><label class="col-sm-3 control-label">Marca</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">                            
                    {!! Form::select('marca_id', $marcas, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}                                                                                                               
            </div>
        </div>
    </div>
</div>                
<div class="form-group"><label class="col-sm-3 control-label">Tipo de Producto</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">                            
                    {!! Form::select('tipoproducto_id', $tipos, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}                                                                                                               
            </div>
        </div>
    </div>
</div>  
<div class="form-group"><label class="col-sm-3 control-label">Origen</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
            {!! Form::select('localidad_id', $localidades, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}                                                                   
            </div>
        </div>
    </div>
</div>                        
<div class="form-group"><label class="col-sm-3 control-label">Logo</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                        <i class="fa fa-upload"></i>
                    {!! Form::file('imagen', ['class' => 'form-control']) !!}                                                                   
                </div>
            </div>
        </div>
    </div>
</div>