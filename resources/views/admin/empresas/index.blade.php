@extends('admin.partes.index')

@section('title')
    Empresas Registradas
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
@include('admin.empresas.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Empresas
            </div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">
                <div class="btn-group" role="group" aria-label="...">
                    @include('admin.partes.botonesVistas')
                    @include('admin.partes.botonFiltrar')
                </div>                      
                <button data-placement="bottom" title="Registrar una nueva Empresa" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle"> Registrar Empresa</i>
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
                @include('admin.empresas.cabeceraTabla')   
                <div class="tablaResultados">
                    @include('admin.empresas.tablaLogos')
                </div>                                                                       
                @include('admin.empresas.tablaRegistros')
            </div>
         </div>        
    </div>    
@endsection
@section('script') 
    <script src="{{ asset('js/empresas.js') }}"></script>
    <script>
        var route = "/admin/empresas";
        var listSidebar = "li4";
    </script>
@endsection