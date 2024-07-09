<?php
    include 'plantilla/head.php';
    include 'plantilla/header.php';
?>  
<?php $filas2=$result2->fetch();?>
			<div class="content">
            	<div class="row">
            		<div  class=" col-xs-6 col-xs-offset-3 ">
						
							<div class="form-group ">
								<label>Tipo</label>
								<input type="text" class="form-control" readonly name="tipo_pqrs" value="<?php echo $filas2['tipo_pqrs']; ?>"> 
							</div>
							<div class="form-group ">
								<label>Sucursal</label>
								<input type="text" class="form-control" readonly name="suc_nombre" value="<?php echo $filas2['suc_nombre']; ?>"> 
							</div>
							<div class="form-group ">
								<label>Identificacion Cliente</label>
								<input type="text" class="form-control" readonly name="id_cliente" value="<?php echo $filas2['id_cliente']; ?>"> 
							</div>
							<div class="form-group ">
								<label>Nombre Cliente</label>
								<input type="text" class="form-control" readonly name="cli_nombre" value="<?php echo $filas2['cli_nombre'],' ',$filas2['cli_apellido']; ?>"> 
							</div>
							<div class="form-group">
								<label><?php echo $filas2['tipo_pqrs']?></label>
								<input type="text" class="form-control" readonly name="texto" value="<?php echo $filas2['texto']; ?>"> 
							</div>
						<form action="index.php?accion=asignarEncargado" method="post">
							<div class="form-group">
								<input type="hidden" id="consecutivo" name="consecutivo" value="<?php echo $filas2['consecutivo'];?>" >
							</div>
							<div class="form-group  has-feedback ">
								<label >Area</label>
								<div class="input-group">
									<input type="text" class="form-control" id="cod_area" readonly="" name="cod_area" value="<?php echo $filas2['cod_area']; ?>">
									<span class="input-group-addon btn btn-success" data-toggle="modal" data-target="#cargarArea"  onclick="cargarArea()"><i class="ti ti-search"></i></span>
								</div>
							</div>
							<div class="form-group  has-feedback ">
								<label >Encargado</label>
								<div class="input-group">
									<input type="text" class="form-control" id="id_usuario" readonly="" name="id_usuario" value="<?php echo $filas2['id_usuario']; ?>">
									<span class="input-group-addon btn btn-success" data-toggle="modal" data-target="#cargarEncargado"  onclick="cargarEmcargado()"><i class="ti ti-search"></i></span>
								</div>
							</div>
							<div class="form-group">								
								<button type="submit" class="btn btn-success btn-block">Asignar</button>
							</div>
						</form>								
							<div class="form-group col-sm-6">
								<label>Fecha Registro</label>
								<input type="text" class="form-control" readonly name="fecha_registro" value="<?php echo $filas2['fecha_registro']; ?>"> 
							</div>
							<div class="form-group col-sm-6">
								<label>Fecha Respuesta</label>
								<input type="text" class="form-control" readonly name="fecha_respuesta" value="<?php echo $filas2['fecha_respuesta']; ?>"> 
							</div>
						<form action="index.php?accion=editarPqrs" method="post">
							<div class="form-group">
								<input type="hidden" id="consecutivo" name="consecutivo" value="<?php echo $filas2['consecutivo'];?>" >
							</div>	
							<div class="form-group">
								<label>Procedimiento</label>
								<textarea class="form-control" name="procedimiento" id="procedimiento"><?php echo $filas2['procedimiento']; ?></textarea>
							</div>
							<div class="form-group">
								<label>Observacion</label>
								<textarea class="form-control" name="observacion" id="observacion"><?php echo $filas2['observacion']; ?></textarea>
							</div>					
							
							<button type="submit" class="btn btn-primary btn-block">Enviar</button>
						</form>
            		</div>	
            	</div>	
        	</div>
        	<div class="modal fade" id="cargarArea">
		        <div class="modal-dialog">
		            <div class="modal-content">
			              <div class="modal-header">
			                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign"></span></button>
			                <h3 class="modal-title"><strong>Area</strong></h3>
			              </div>
			              <div class="modal-body">
			                 <form action="#"  method="post">
			                 <div id="cargar_Area"></div>   
			                 </form>                         
			              </div>
		            </div>
		        </div>
		    </div>
		    <div class="modal fade" id="cargarEncargado">
		        <div class="modal-dialog">
		            <div class="modal-content">
			              <div class="modal-header">
			                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign"></span></button>
			                <h3 class="modal-title"><strong>Encargado</strong></h3>
			              </div>
			              <div class="modal-body">
			                 <form action="#"  method="post">
			                 <div id="cargar_Encargado"></div>   
			                 </form>                         
			              </div>
		            </div>
		        </div>
		    </div>
		    
        </div>
    </div>
<?php include 'plantilla/footer.php'; ?>  