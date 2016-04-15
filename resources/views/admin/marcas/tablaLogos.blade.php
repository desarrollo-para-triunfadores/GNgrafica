<div id="tab-logos" class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Marcas Registradas</div>
                <div class="panel-body">
                    <div class="col-lg-8">
                        <br>
                        <strong> Mostrando {!! $marcas->count() !!} registros del total existente.</strong>  
                    </div>
                    <br>
                    <br>
                    <hr> 
                    @include('admin.partes.msjError')
                    @include('flash::message')         
                    <div class="row"> 
                        @foreach($marcas as $marca)                       
                        <div class="col-md-3">
                            @if ($marca->logo_marca->nombre === "sin imagen")
                               <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/sin-logo.jpg') }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.marcas.show', $marca->id) }}"> <h3>   
                                        <?php 
                                            if (strlen($marca->nombre)>20) {
                                               echo (substr($marca->nombre , 0, 17)."...");
                                            }                                                                                   
                                            else {
                                              echo ($marca->nombre);
                                            }
                                        ?>
                                    </h3></a>                                                
                                        <h4><p>Empresa: {{ $marca->empresa->nombre }}</p></h4>   
                                        @if ($marca->estado)
                                            <p><span class="label label-success"><i class="fa fa-thumbs-o-up"></i></span>Cantidad de Productos: {{ $marca->productos->count() }} </p> 
                                        @else
                                            <p><span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span>Cantidad de Productos: {{ $marca->productos->count() }} </p>                                                  
                                        @endif                                                                                              
                                    </div>
                                </div>
                            @else
                                <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/' . $marca->logo_marca->nombre) }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.marcas.show', $marca->id) }}"> <h3>
                                        <?php 
                                            if (strlen($marca->nombre)>20) {
                                               echo (substr($marca->nombre , 0, 17)."...");
                                            }                                                                                   
                                            else {
                                              echo ($marca->nombre);
                                            }
                                        ?>
                                    </h3></a>                                                
                                       <h4><p>Empresa: {{ $marca->empresa->nombre }}</p></h4>   
                                        @if ($marca->estado)
                                            <p><span class="label label-success"><i class="fa fa-thumbs-o-up"></i></span> Cantidad de Productos: {{ $marca->productos->count() }} </p> 
                                        @else
                                            <p><span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span> Cantidad de Productos: {{ $marca->productos->count() }} </p>                                                  
                                        @endif                                                    
                                    </div>
                                </div>                                                 
                            @endif 
                        </div>   
                        @endforeach                               
                    </div> 
                    {!! $marcas->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>