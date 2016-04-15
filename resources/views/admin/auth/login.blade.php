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
                         <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    La Auténtica - Administración
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
                                    {!! Form::open(['route' => 'admin.auth.login', 'id' =>'form-crear', 'method' => 'POST', 'class' => 'form-horizontal']) !!}   
                                        {!! csrf_field() !!}
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-md-3 control-label">
                                                    Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-envelope"></i>
                                                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-md-3 control-label">
                                                    Password</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-lock"></i>
                                                        {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                                                    </div>                                                     
                                                </div>
                                            </div>
                                            <div class="form-group mbn">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input tabindex="5" type="checkbox" />&nbsp; Mantenme conectado</label>
                                                    </div>
                                                </div>
                                                <span class="help-block mbn">
                                                    {!!link_to('password/email', $title = '¿Se te olvidó tu contraseña?', $attributes = array(), $secure = null)!!}
                                                    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-actions pal">
                                            <div class="form-group mbn">
                                                <div class="pull-right"> 
                                                <a  href="{{ route('admin.usuarios.index') }}" class="btn btn-red "> <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span> Volver</a>                                                                                 
                                                {!! Form::submit('Ingresar', ['class' => 'btn btn-primary ']) !!} 
                                                    
                                            </div> 
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>                                                                    
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partes.scripts')
</body>
</html>