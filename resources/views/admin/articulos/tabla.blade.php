@extends('admin.partes.index')

@section('title')
    Articulos Registrados
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
@include('admin.articulos.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Articulos</div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">                      
                <button data-placement="bottom" title="Registrar un nuevo producto de la gráfica" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Registrar Articulo
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
                                <div class="panel-heading">Articulos Registrados</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')                                                
                                    <table class="display dataTable table table-hover table-striped">
                                        <thead>
                                            <tr>                                                
                                                <th>Nombre</th>
                                                <th>Talle</th>
                                                <th>Color</th>
                                                <th>Material</th>
                                                <th>Tipo</th>
                                                <th>Stock</th>
                                                <th>Stock Minimo</th>
                                                <th>Proveedor</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($articulos as $articulo)
                                            <tr>
                                                <td>{{ $articulo->nombre }}</td>
                                                <td>{{ $articulo->talle->nombre}}</td>
                                                <td>{{ $articulo->color }}</td>
                                                <td>{{ $articulo->material->nombre }}</td>
                                                <td>{{ $articulo->tipo->nombre }}</td>
                                                <td>{{ $articulo->stock }}</td>
                                                <td>{{ $articulo->stockMin }}</td>

                                                <td>{{ $articulo->proveedor->nombre }}</td>
                                                

                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.articulos.show', $articulo->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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
        var listSidebar = "li8";
    </script>
@endsection