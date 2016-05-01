<div id="tab-lista" class="tablaResultados2 col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Movimientos</div>
                <div class="panel-body">                    
                    <br>                   
                    @include('admin.partes.msjError')
                    @include('flash::message')   
                    <table class="dataTable display table table-hover table-striped">
                        <thead>
                            <tr> 
                                <th>Concepto</th>                                
                                <th>Fecha y hora</th>
                                <th>Tipo</th>   
                                <th>Monto</th>                             
                                <th>Usuario</th>    
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($caja->movimientos as $movimiento)
                            <tr>     
                                <td>{{ $movimiento->concepto }}</td>                                     
                                <td>{{ $movimiento->fecha }} - {{ $movimiento->hora }}</td>    
                                <td>{{ $movimiento->tipo }}</td>                         
                                <td>${{ $movimiento->monto }}</td>                                                                                                          
                                <td>{{ $movimiento->user->name}}</td>  
                                <td class="text-center">
                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder a todos los movimientos del mismo." href="" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
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