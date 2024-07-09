<?php
    include 'plantilla/head.php';
    include 'plantilla/header.php';
?>    
        <div class="content">
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1">
                    <a href="#addcliente" class="btn btn-success btn-sm" data-toggle="modal" >Agregar</a>   
                    <!-- Modal Structure -->
                    <div class="modal fade" id="addcliente" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                  <h3 class="modal-title"><strong>Registrar Cliente</strong></h3>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php?accion=registroCliente" id="registrarCliente" method="post">
                                        <div class="form-group">
                                            <label >Identificacion</label>
                                            <input type="text" class="form-control" name="cli_identificacion" placeholder="Identificacion">
                                        </div>                                                      
                                        <div class="form-group has-success">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="cli_nombre" placeholder="Nombre">
                                        </div>                                    
                                        <div class="form-group has-success">
                                            <label>Apellido</label>
                                            <input type="text" class="form-control" name="cli_apellido" placeholder="Apellido">                                 
                                        </div>
                                        <div class="form-group has-success">
                                            <label>Correo</label>
                                            <input type="text" class="form-control" name="cli_correo" placeholder="Correo">                                 
                                        </div>
                                        <div class="form-group has-success">
                                            <label>Celular</label>
                                            <input type="text" class="form-control" name="cli_celular" placeholder="Celular">                                 
                                        </div>
                                        <div class="form-group has-success">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" name="cli_telefono" placeholder="Celular">                                 
                                        </div>
                                        <div class="form-group has-success">
                                            <select name="cli_estado" class="form-control">
                                                <option value="">Seleccione su Estado</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></span></button>
                                        </div>
                                    </form>                                 
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="row" style="margin-top: 10px;">    
                <div  class=" col-xs-10 col-xs-offset-1 ">
                    <table id="tablaClientes" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Identificacion</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Celular</th> 
                                <th>Telefono</th>                             
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="editCliente">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span></button>
                            <h3 class="modal-title"><strong>Actualizar Cliente</strong></h3>
                          </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarCliente" id="actualizarCliente" method="post" class="form-group">
                                    <div id="frmActualizarCli"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editarCliente" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                <h3 class="modal-title"><strong>Editar Estado</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarEstadoCli" id="actualizarCliente" method="post" class="form-group">
                                    <div id="frmEditar_EstadoCli"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>           
            </div>                
        </div>
    </div>
</div> 

<?php include 'plantilla/footer.php'; ?>    