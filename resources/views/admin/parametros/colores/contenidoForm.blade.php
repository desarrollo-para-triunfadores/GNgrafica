<h3>Detalles del registro</h3>
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
<div class="form-group"><label class="col-sm-3 control-label">Código</label>
    <div class="col-sm-9 controls">
        <div class="row">
            <div class="col-xs-12">
              <div id="cp2" class="input-group colorpicker-component">
                {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'campo opcional', 'maxlength' => '50']) !!}
                  <span class="input-group-addon"><i></i></span>
              </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr/>
<br>
