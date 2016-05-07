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



@endsection
@section('script') 
    <script>
        var listSidebar = "li7";
    </script>
@endsection