@extends('admin.partes.index')

@section('title')
    Usuarios Registrados
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
    @include('admin.usuarios.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Usuarios</div>
        </div>
        <div class="page-header pull-right">
         <div class="page-toolbar">         
                <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.usuarios.index') }}" title="Volver a los registros de usuarios"  class="btn btn-blue"> <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span> Volver</a>                         
            </div>
            
            <div class="page-toolbar">                      
                <button data-placement="left" title="Registrar un nuevo Usuario" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <span class="fa fa-user-plus"> Registrar Usuario</span>
                </button>                      
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
                        <div class="col-lg-12">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">Usuarios Registrados</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')                          
                                     <table class="display dataTable table table-hover table-striped">
                                        <thead>
                                            <tr>                                                
                                                <th>Apellido y Nombre</th>
                                                <th>Email</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usuarios as $usuario)
                                            <tr>                                                
                                                <td>{{ $usuario->name }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.usuarios.show', $usuario->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
                                                </td>
                                            </tr>                                                  
                                        @endforeach
                                        </tbody>
                                    </table>             
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
        var listSidebar = "li1";       
    </script>
@endsection