@extends('admin.partes.index')

@section('title')
    Colores Registrados para los articulos
@endsection

@section('sidebar')
    @include('admin.partes.sidebar')
@endsection

@section('content')
    @include('admin.parametros.colores.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                Colores</div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">
                <div class="btn-group" role="group" aria-label="...">
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.talles.index') }}" title="Visualizar los talles para indumentaria"  class="btn btn-info"> <span class="fa fa-flag" aria-hidden="true"></span> Talles</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.tipoArticulos.index') }}" title="Visualizar tipos de articulos"  class="btn btn-info"> <span class="fa fa-cubes" aria-hidden="true"></span> Tipos de Articulos</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.responiva.index') }}" title="Visualizar tipos de articulos"  class="btn btn-info"> <span class="fa fa-balance-scale" aria-hidden="true"></span>Tipos de Tributos</a>
                    <a data-toggle="tooltip" data-placement="bottom" href="{{ route('admin.materiales.index') }}" title="Visualizar materiales de productos"  class="btn btn-info"> <span class="fa fa-map-marker" aria-hidden="true"></span> Materiales</a>
                </div>
                <button data-placement="bottom" title="Registrar un nuevo color para los productos" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Registrar Color
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
                                <div class="panel-heading">Colores Registrados</div>
                                <div class="panel-body">
                                    @include('admin.partes.msjError')
                                    @include('flash::message')
                                    <table class="dataTable display table table-hover table-striped" >
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>

                                            <th class="text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($colores as $color)
                                            <tr>
                                                <td>  {{ $color->nombre }}</td>
                                                <td class="text-center">
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podr&aacute acceder acciones como edici&oacuten y eliminaci&oacuten del mismo" href="{{ route('admin.colores.show', $color->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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