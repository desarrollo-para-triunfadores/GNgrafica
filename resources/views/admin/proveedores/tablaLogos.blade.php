<div id="tab-logos" class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Empresas Registradas</div>
                <div class="panel-body">
                    <div class="col-lg-8">
                        <br>
                        <strong> Mostrando {!! $proveedores->count() !!} registros del total existente.</strong>
                    </div>
                    <br>
                    <br>
                    <hr> 
                    @include('admin.partes.msjError')
                    @include('flash::message')         
                    <div class="row"> 
                        @foreach($proveedores as $proveedor)
                        <div class="col-md-3">
                            @if ($proveedor->logo_empresa->nombre === "sin imagen")
                               <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/empresas/sin-logo.jpg') }}"/>
                                     <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.proveedores.show', $proocedor->id) }}"> <h3>{{ $proveedor->nombre }}</h3></a>
                                        <p><h4>Origen: {{ $proveedor->localidad->provincia->pais->nombre }}</h4></p>
                                        <p>Rubro: {{ $proveedor->rubro->nombre }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/empresas/' . $proveedor->logo_empresa->nombre) }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.proveedores.show', $proveedor->id) }}"> <h3>{{ $proveedor->nombre }}</h3></a>
                                        <p><h4>Origen: {{ $proveedor->localidad->provincia->pais->nombre }}</h4></p>
                                        <p>Rubro: {{ $empresa->rubro->nombre }}</p>
                                    </div>
                                </div>                                                 
                            @endif 
                        </div>   
                        @endforeach                               
                    </div> 
                    {!! $proceedor->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>