@extends('admin.partes.index')

@section('title')
    Detalle de la Marca
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
    @include('admin.marcas.editar')
    @include('admin.marcas.confirmar')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Marca: {{ $marca->nombre }}</div>
        </div>        
        <div class="page-header pull-right">
            <div class="page-toolbar">         
                <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.marcas.index') }}" title="Volver a los Registros de Marcas"  class="btn btn-blue"> <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span> Volver</a>                         
            </div>
        </div>
        <div class="clearfix"></div>
    </div>                            
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
                    <div class="row mtl">                         
                        <div class="col-md-12">
                            <div class="panel">                               
                                <div class="panel-body">                                                                                
                                    <h3>Detalles del Registro</h3>
                                    <br>
                                    @include('admin.partes.msjError')
                                    @if (!($marca->estado))                                           
                                        @include('admin.partes.recordatorioEstado')                                             
                                    @endif                                     
                                    @include('flash::message') 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row mtl">
                                                <div class="col-md-4">
                                                    @if ($marca->logo_marca->nombre === "sin imagen")                                           
                                                        <div class="form-group">
                                                            <div class="text-center mbl"><img src="{{ asset('imagenes/marcas/sin-logo.jpg') }}" alt="" style="width:350px;height:250px" class="img-thumbnail"/></div>
                                                        </div>  
                                                    @else
                                                        <div class="form-group">
                                                            <div class="text-center mbl"><img src="{{ asset('imagenes/marcas/' . $marca->logo_marca->nombre) }}" alt="" style="width:350px;height:250px" class="img-thumbnail"/></div>
                                                        </div>                                   
                                                    @endif                                                 
                                                </div>
                                                <div class="col-md-8">                                    
                                                    <table class="table table-striped table-hover">
                                                        <tbody> 

                                                            <tr>
                                                                <td><h4 class="box-heading">Nombre:</h4></td>
                                                                <td><h4>{{ $marca->nombre }}</h4></td>
                                                            </tr> 
                                                            <tr>
                                                                <td><h4 class="box-heading">Empresa Perteneciente:</h4></td>
                                                                <td><h4>{{ $marca->empresa->nombre }}</h4></td>
                                                            </tr> 
                                                            <tr>
                                                                <td><h4 class="box-heading">Estado:</h4></td>
                                                                @if ($marca->estado)
                                                                   <td><h4>Activo  <span class="label label-success"><i class="fa fa-thumbs-o-up"></i></span></h4></td>
                                                                @else
                                                                   <td><h4>Inactivo  <span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span></h4></td>                                               
                                                                @endif                                                                
                                                            </tr> 
                                                            <tr>
                                                                <td><h4 class="box-heading">Fecha de Alta:</h4></td>
                                                                <td><h4>{{ $marca->created_at->diffForHumans() }}</h4></td>
                                                            </tr> 
                                                            <tr>
                                                                <td><h4 class="box-heading">Cantidad de productos asociados:</h4></td>
                                                                <td><h4>{{ $marca->productos->count() }}</h4></td>
                                                            </tr>                                                                                         
                                                        </tbody>
                                                    </table>                            
                                                </div>
                                            </div>  
                                        </div>                          
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr/>
                                            <br>   
                                            <div class="pull-right"> 
                                                <button type="button"  data-hover="tooltip"  data-toggle="modal" data-target="#modal-actualizar"  title="Visualizar la pantalla de actualización de datos. En ella podrá actualizar los datos pertinentes al registro."  class="btn btn-warning">  Actualizar Datos</i></button>                                                                          
                                                <button type="button"  data-hover="tooltip" title="Confirmar eliminación de datos. " data-toggle="modal" data-target="#modal-confirmar"  class="btn btn-danger">Eliminar Registro</i></button>
                                            </div>    
                                        </div>                            
                                    </div>  
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>          
    </div>                    
</div>
@endsection

@section('script') 
    <script>
        var listSidebar = "li5";
    </script>
@endsection