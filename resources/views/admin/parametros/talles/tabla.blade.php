@extends('admin.partes.index')

@section('title')
    Talles Registrados para los articulos
@endsection

@section('sidebar')
    @include('admin.partes.sidebar')
@endsection

@section('content')
    @include('admin.parametros.talles.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                Talles</div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">
                <div class="btn-group" role="group" aria-label="...">
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.materiales.index') }}" title="Visualizar los materiales"  class="btn btn-info"> <span class="fa fa-flag" aria-hidden="true"></span> Materiales</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.tipoArticulos.index') }}" title="Visualizar tipos de articulos"  class="btn btn-info"> <span class="fa fa-map-marker" aria-hidden="true"></span> Tipos</a>
                </div>
                <button data-placement="bottom" title="Registrar un nuevo talle" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Registrar Talle
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
                                <div class="panel-heading">Talles Registrados</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')
                                    <table class="dataTable display table table-hover table-striped" >
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($talles as $talle)
                                            <tr>
                                                <td>{{ $talle->nombre }}</td>
                                                <td>{{ $talle->descripcion }}</td>
                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podr� acceder acciones como edici�n y eliminaci�n del mismo" href="{{ route('admin.talles.show', $talle->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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