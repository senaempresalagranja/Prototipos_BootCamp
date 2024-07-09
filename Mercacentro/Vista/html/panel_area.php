<?php
    include 'plantilla/head.php';
    include 'plantilla/header.php';
?>    
        <div class="content">
            <div class="row">
                <div class="col-xs-1 col-xs-offset-1">
                    <a href="#addusuario" class="btn btn-success btn-sm" data-toggle="modal" >Agregar</a>   
                    <!-- Modal Structure -->
                    <div class="modal fade" id="addusuario" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                  <h3 class="modal-title"><strong>Registrar Area</strong></h3>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php?accion=registroArea" id="registrarArea" method="post">
                                        <div class="form-group has-success">
                                            <label >Codigo</label>
                                            <input type="text" class="form-control" name="are_codigo" placeholder="Codigo">
                                        </div> 
                                        <div class="form-group  has-feedback has-success">
                                            <label >Sucursal</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="are_sucursal" readonly="" name="are_sucursal" >
                                                <span class="input-group-addon btn btn-success" data-toggle="modal" data-target="#cargarSucursal"  onclick="cargarSucursal()"><i class="ti ti-search"></i></span>
                                            </div>
                                        </div>                                                  
                                        <div class="form-group has-success">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="are_nombre" placeholder="Area">
                                        </div>                                                                                            
                                        <div class="form-group has-success">
                                            <label>Ubicacion</label>
                                            <input type="text" class="form-control" name="are_ubicacion" placeholder="Ubicacion">
                                        </div>
                                                                            
                                        <div class="form-group has-success">
                                            <select name="are_estado" class="form-control">
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
                    <table id="tablaArea" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Codigo</th>
                                <th>Sucursal</th>
                                <th>Nombre</th>
                                <th>Ubicacion</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="editararea">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                            <h3 class="modal-title"><strong>Actualizar Area</strong></h3>
                          </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizArea" id="actualizarArea" method="post" class="form-group">
                                    <div id="frmActualizarArea"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editarEstadoarea" >
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
                </div>
                <div class="modal fade" id="cargarSucursal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign"></span></button>
                                <h3 class="modal-title"><strong>Sucursal</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="#"  method="post">
                                <div id="cargar_Sucursal"></div>   
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