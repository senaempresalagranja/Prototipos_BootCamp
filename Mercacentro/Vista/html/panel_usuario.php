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
                                  <h3 class="modal-title"><strong>Registrar Tipo Usuario</strong></h3>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php?accion=registroUsuario" id="registrarUsuario" method="post">
                                        <div class="form-group has-success">
                                            <label >Identificación</label>
                                            <input type="text" class="form-control" name="usu_identificacion" placeholder="Identificación">
                                        </div>
                                        <div class="form-group  has-feedback has-success">
                                            <label >Tipo Usuario</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="usu_tipo" readonly="" name="usu_tipo" >
                                                <span class="input-group-addon btn btn-success" data-toggle="modal" data-target="#cargarTusuario"  onclick="cargarTusuario()"><i class="ti ti-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group  has-feedback has-success">
                                            <label >Area</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="usu_area" readonly="" name="usu_area" >
                                                <span class="input-group-addon btn btn-success" data-toggle="modal" data-target="#cargarArea2"  onclick="cargarArea2()"><i class="ti ti-search"></i></span>
                                            </div>
                                        </div>                                                                                            
                                        <div class="form-group has-success">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="usu_nombre" placeholder="Nombre">
                                        </div>
                                        <div class="form-group has-success">
                                            <label >Apellido</label>
                                            <input type="text" class="form-control" name="usu_apellido" placeholder="Apellido">
                                        </div>                                                      
                                        <div class="form-group has-success">
                                            <label>Correo</label>
                                            <input type="text" class="form-control" name="usu_correo" placeholder="correo">
                                        </div>
                                        <div class="form-group has-success">
                                            <label >Celular</label>
                                            <input type="text" class="form-control" name="usu_celular" placeholder="Celular">
                                        </div> 
                                        <div class="form-group has-success">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" name="usu_telefono" placeholder="Telefono">
                                        </div>
                                        <div class="form-group has-success">
                                            <label >Clave</label>
                                            <input type="text" class="form-control" name="usu_clave" placeholder="Clave">
                                        </div>                                     
                                        <div class="form-group has-success">
                                            <select name="usu_estado" class="form-control">
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
                    <table id="tablaUsuario" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Identificación</th>
                                <th>Tipo Usuario</th>
                                <th>Area</th>
                                <th>Nombre</th>
                                <th>Apellido</th>                              
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Telefono</th>
                                <th>Clave</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="editUsuario">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span></button>
                            <h3 class="modal-title"><strong>Actualizar Usuario</strong></h3>
                          </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarUsuario" id="actualizarUsuario" method="post" class="form-group">
                                    <div id="frmActualizarUsu"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editarEUsuario" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></button>
                                <h3 class="modal-title"><strong>Editar Estado</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="index.php?accion=actualizarEstadoUsu" id="actualizarEstadoUsu" method="post" class="form-group">
                                    <div id="frmEditar_EstadoUsu"></div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="font-size: 20px;"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="modal fade" id="cargarTusuario">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign"></span></button>
                                <h3 class="modal-title"><strong>Tipo Usuario</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="#"  method="post">
                                <div id="cargar_Tusuario"></div>   
                                </form>                         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="cargarArea2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign"></span></button>
                                <h3 class="modal-title"><strong>Area</strong></h3>
                            </div>
                            <div class="modal-body">
                                <form action="#"  method="post">
                                <div id="cargar_Area2"></div>   
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