@extends('admin.partes.index')

@section('title')
    Tipos de Productos Registrados
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
@include('admin.tipos.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Tipos de Productos</div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">                      
                <button data-placement="bottom" title="Registrar un nuevo país" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle"> Registrar Tipo de Producto</i>
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
                                <div class="panel-heading">Tipos de Productos Registrados</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')                         
                                    <table class="display dataTable table table-hover table-striped">
                                        <thead>
                                            <tr>                                                
                                                <th>Nombre</th>                                                
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tipos as $tipo)
                                            <tr>                                                
                                                <td>{{ $tipo->nombreTipo }}</td>                                               
                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.tipoproducto.show', $tipo->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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
        var listSidebar = "li6";
    </script>
@endsection