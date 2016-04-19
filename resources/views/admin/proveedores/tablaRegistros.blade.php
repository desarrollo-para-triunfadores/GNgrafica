<div id="tab-lista" class="col-lg-12 hide">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Empresas Registradas</div>
                <div class="panel-body">                    
                    <br>                   
                    @include('admin.partes.msjError')
                    @include('flash::message')                         
                    <table class="dataTable display table table-hover table-striped">
                        <thead>
                            <tr>                                                
                                <th>Nombre</th>   
                                <th>Rubro</th>  
                                <th>Origen</th>                                               
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($empresas as $empresa)
                            <tr>                                                
                                <td>{{ $empresa->nombre }}</td>   
                                <td>{{ $empresa->rubro->nombre }}</td> 
                                <td>{{ $empresa->localidad->nombre }} ({{ $empresa->localidad->provincia->pais->nombre }})</td>                                                                                 
                                <td class="text-center">
                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.empresas.show', $empresa->id) }}" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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