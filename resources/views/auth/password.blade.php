<!DOCTYPE html>
<html>
<head>
    <title>Login | La Auténtica</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.partes.estilos') 
</head>
<body>
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                         <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    La Auténtica - Restablecer contraseña
                                </div>
                                <div class="panel-body pan">
                                    @if ($errors->any())
                                         <div class="alert alert-warning alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>¡Atención!</strong> 
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>                        
                                        </div>
                                    @endif
                                    {!! Form::open(['url' => '/password/email', 'id' =>'form-crear']) !!}   
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-md-4 control-label">
                                                    Escriba su correo de login:</label>
                                                <div class="col-md-8">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-envelope"></i>
                                                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                                                    </div>    
                                                </div>
                                            </div>  
                                            <br>                                    
                                        </div>
                                        <div class="form-actions pal">
                                            <div class="form-group mbn">
                                                <div class="pull-right"> 
                                                <a  href="{{ route('admin.usuarios.index') }}" class="btn btn-red "> <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span> Volver</a>                                                                                 
                                                {!! Form::submit('Enviar Link', ['class' => 'btn btn-primary ']) !!} 
                                                    
                                            </div> 
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>                                                                    
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partes.scripts')
</body>
</html>