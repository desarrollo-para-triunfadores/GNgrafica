<h3>Detalles del Registro</h3>
<br>
<div class="form-group"><label class="col-sm-3 control-label">Nombre</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'maxlength' => '50', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Tipo</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::select('tipo_id', $tipos, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Talle</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::select('talle_id', $talles, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Material</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::select('material_id', $materiales, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Proveedor</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::select('proveedor_id', $proveedores, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Dimensiones (para descartables)</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::number('tamaño', null, ['class' => 'form-control', 'placeholder'=>'campo no obligatrio']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Alto</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::number('alto', null, ['class' => 'form-control', 'placeholder'=>'campo no obligatrio']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Ancho</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::number('ancho', null, ['class' => 'form-control', 'placeholder'=>'campo no obligatrio']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Color</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-paint-brush"></i>
                    {!!Form::select('color', ['Rojo','Celeste','Azul Marino','Azul','Verde','Blanco','Negro'], null, ['placeholder' => 'Escoja el color.. (campo no obligatorio)','class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>





<div class="form-group"><label class="col-sm-3 control-label">Stock Actual</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::number('stock', null, ['class' => 'form-control', 'placeholder'=>'campo requerido', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Stock Minimo</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::number('stockMin', null, ['class' => 'form-control', 'placeholder'=>'campo requerido', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr/>
<br>        