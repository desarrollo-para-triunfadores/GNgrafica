<div id="tab-logos" class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Empresas Registradas</div>
                <div class="panel-body">
                    <div class="col-lg-8">
                        <br>
                        <strong> Mostrando {!! $empresas->count() !!} registros del total existente.</strong>  
                    </div>
                    <br>
                    <br>
                    <hr> 
                    @include('admin.partes.msjError')
                    @include('flash::message')         
                    <div class="row"> 
                        @foreach($empresas as $empresa)                        
                        <div class="col-md-3">
                            @if ($empresa->logo_empresa->nombre === "sin imagen")
                               <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/empresas/sin-logo.jpg') }}"/>
                                     <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.empresas.show', $empresa->id) }}"> <h3>{{ $empresa->nombre }}</h3></a>
                                        <p><h4>Origen: {{ $empresa->localidad->provincia->pais->nombre }}</h4></p>                                                    
                                        <p>Rubro: {{ $empresa->rubro->nombre }} - Cantidad de Marcas: {{ $empresa->marcas->count() }}</p>                                                                                             
                                    </div>
                                </div>
                            @else
                                <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/empresas/' . $empresa->logo_empresa->nombre) }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.empresas.show', $empresa->id) }}"> <h3>{{ $empresa->nombre }}</h3></a>                                                
                                        <p><h4>Origen: {{ $empresa->localidad->provincia->pais->nombre }}</h4></p>                                                    
                                        <p>Rubro: {{ $empresa->rubro->nombre }} - Cantidad de Marcas: {{ $empresa->marcas->count() }}</p>                                                   
                                    </div>
                                </div>                                                 
                            @endif 
                        </div>   
                        @endforeach                               
                    </div> 
                    {!! $empresas->render() !!}   
                </div>
            </div>
        </div>
    </div>
</div>