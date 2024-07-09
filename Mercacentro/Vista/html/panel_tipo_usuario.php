<?php
    include 'plantilla/head.php';
    include 'plantilla/header.php';
?>    
        <div class="content">
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1">
                    <a href="#addtipousuario" class="btn btn-success btn-sm" data-toggle="modal" >Agregar</a>   
                    <!-- Modal Structure -->
                    <div class="modal fade" id="addtipousuario" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                  <h3 class="modal-title"><strong>Registrar Tipo Usuario</strong></h3>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php?accion=registroTipoUsuario" id="registrarTipoUsuario" method="post">
                                        <div class="form-group has-success">
                                            <label >Codigo</label>
                                            <input type="text" class="form-control" name="tusu_codigo" placeholder="Codigo">
                                        </div>                                                      
                                        <div class="form-group has-success">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="tusu_nombre" placeholder="Nombre">
                                        </div>                                    
                                        <div class="form-group has-success">
                                            <select name="tusu_estado" class="form-control">
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
                    <table id="tablaTipoUsuario" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Codigo </th>
                                <th>Nombre</th>                                                       
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="editTipoUsuario">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span></button>
                            <h3 class="modal-title"><strong>Actualizar Tipo Usuario</strong></h3>
                          </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarTipoUsuario" id="actualizarTipoUsuario" method="post" class="form-group">
                                    <div id="frmActualizarTipoUsu"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editarEstadoTipoUsuario" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                <h3 class="modal-title"><strong>Editar Estado</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarEstadoTipoUsu" id="actualizarEstadoTipoUsuario" method="post" class="form-group">
                                    <div id="frmEditar_EstadoTipoUsu"></div>
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