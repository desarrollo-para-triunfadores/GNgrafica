<h3>Detalles del registro</h3>
<br>

<div class="form-group"><label class="col-sm-3 control-label">Apellido</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'maxlength' => '50', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

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

<div class="form-group"><label class="col-sm-3 control-label">Empresa</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('empresa', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Responsabilidad ante el IVA</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::select('responIva_id', $responIva, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">CUIT</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('cuit', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">DNI</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '8']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Teléfono</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Direccion</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Localidad</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::select('localidad_id', $localidades, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group"><label class="col-sm-3 control-label">Descripcion</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-icon right">
                    <i class="fa fa-pencil"></i>
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'campo no requerido', 'maxlength' => '50']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr/>
<br>