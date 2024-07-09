<?php
    include 'plantilla/head.php';
    include 'plantilla/header.php';
?>  
    
        <div class="content">
        <!-- horizontal tabs -->
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#pqrs" data-toggle="tab">PQRS</a></li>
                        <li><a href="#peticion" data-toggle="tab">Peticiones</a></li>
                        <li><a href="#queja" data-toggle="tab">Quejas</a></li>
                        <li><a href="#reclamo" data-toggle="tab">Reclamos</a></li>
                        <li><a href="#sugerencia" data-toggle="tab">Sugerencias</a></li>
                        <li><a href="#felicitacion" data-toggle="tab">Felicitaciones</a></li>
                    </ul>
                </div>
            </div>
            <div id="my-tab-content" class="tab-content text-center">
                <div class="tab-pane active" id="pqrs">
                    <div class="row" style="margin-top: 10px;">    
                        <div  class=" col-xs-10 col-xs-offset-1 ">
                            <table id="tablaPQRS" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Sucursal</th>
                                        <th>PQRS</th>
                                        <th>Cliente</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
                <div class="tab-pane" id="peticion">
                    <div class="row" style="margin-top: 10px;">    
                        <div class="row" style="margin-top: 10px;">                    
                            <div  class=" col-xs-10 col-xs-offset-1 ">
                                <table id="tablaPeticion" class="table table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Codigo</th>
                                            <th>Tipo</th>
                                            <th>Sucursal</th>
                                            <th>PQRS</th>
                                            <th>Cliente</th>
                                            <th>Fecha Registro</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>                           
                </div>
                <div class="tab-pane" id="queja">
                    <div class="row" style="margin-top: 10px;">                    
                        <div  class=" col-xs-10 col-xs-offset-1 ">
                            <table id="tablaQueja" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Sucursal</th>
                                        <th>PQRS</th>
                                        <th>Cliente</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>  
                    </div>    
                </div>
                <div class="tab-pane" id="reclamo">
                    <div class="row" style="margin-top: 10px;">                    
                        <div  class=" col-xs-10 col-xs-offset-1 ">
                            <table id="tablaReclamo" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Sucursal</th>
                                        <th>PQRS</th>
                                        <th>Cliente</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>     
                </div>
                <div class="tab-pane" id="sugerencia">
                    <div class="row" style="margin-top: 10px;">                    
                        <div  class=" col-xs-10 col-xs-offset-1 ">
                            <table id="tablaSugerencia" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Sucursal</th>
                                        <th>PQRS</th>
                                        <th>Cliente</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>      
                </div>
                <div class="tab-pane" id="felicitacion">
                    <div class="row" style="margin-top: 10px;">    
                        <div  class=" col-xs-10 col-xs-offset-1 ">
                            <table id="tablaFelicitacion" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Sucursal</th>
                                        <th>PQRS</th>
                                        <th>Cliente</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div> 
                    </div>    
                </div>
            </div>
       
                <!-- <div class="modal fade" id="editarEstadoarea" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                <h3 class="modal-title"><strong>Editar Estado</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarEArea" id="actualizarEstadoArea" method="post" class="form-group">
                                    <div id="frmEditar_EstadoArea"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>            -->
        </div>
    </div>
</div> 
<?php include 'plantilla/footer.php'; ?>   