@extends('admin.partes.index')

@section('title')
    Tipos de Responsabilidades Tributarias
@endsection

@section('sidebar')
    @include('admin.partes.sidebar')
@endsection

@section('content')
    @include('admin.parametros.responiva.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                Tipos de Tributos</div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">
                <div class="btn-group" role="group" aria-label="...">
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.talles.index') }}" title="Visualizar los talles para indumentaria"  class="btn btn-info"> <span class="fa fa-flag" aria-hidden="true"></span> Talles</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.tipoArticulos.index') }}" title="Visualizar tipos de articulos"  class="btn btn-info"> <span class="fa fa-map-marker" aria-hidden="true"></span> Tipos</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.materiales.index') }}" title="Visualizar materiales de productos"  class="btn btn-info"> <span class="fa fa-map-marker" aria-hidden="true"></span> Materiales</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.colores.index') }}" title="Visualizar materiales de productos"  class="btn btn-info"> <span class="fa fa-paint-brush" aria-hidden="true"></span> Colores</a>
                </div>
                <button data-placement="bottom" title="Registrar un nuevo tipo de responsabilidad ante el IVA" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Registrar Responsabilidad Tributaria
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
                                <div class="panel-heading">Tipos entidades tributarias registradas</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')
                                    <table class="dataTable display table table-hover table-striped" >
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>IVA aplicado</th>
                                            <th>Tipo Factura</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($responiva as $responiva)
                                            <tr>
                                                <td>  {{ $responiva->nombre }}</td>
                                                <td>  {{ $responiva->iva }}</td>
                                                <td>  {{ $responiva->factura }}</td>
                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podr&aacute acceder acciones como edici&oacuten y eliminaci&oacuten del mismo" href="{{ route('admin.responiva.show', $responiva->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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
        var listSidebar = "li2";
    </script>
@endsection