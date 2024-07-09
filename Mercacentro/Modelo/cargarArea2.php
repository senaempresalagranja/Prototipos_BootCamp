<?php
session_start();
	require_once 'conexion.php';
   $conexion = new Conexion();
   $sql = "SELECT * FROM area WHERE are_estado='Activo'";
		$conexion->buscar_query($sql);
		$result=$conexion->obtenerResult();
	$filas=$conexion->ObtenerFilasAfectadas();
	if ($filas>=1){ ?>
	

<div  class="table-responsive">	
	<table class="table  table-hover ">
		<tr class="success">
			<th>Codigo</th>
			<th>Sucursal</th>
			<th>Nombre</th>
			<th>Ubicacion</th>
			<th>Estado</th>
			<th></th>
		</tr>
		<?php 
		while($fila = $result->fetch()){
		?>
		<tr>
			<td valign="top"><?php echo $fila['are_codigo']; ?></td>
			<td valign="top"><?php echo $fila['are_sucursal']; ?></td>
			<td valign="top"><?php echo $fila['are_nombre']; ?></td>
			<td valign="top"><?php echo $fila['are_ubicacion']; ?></td>
			<td valign="top"><?php echo $fila['are_estado']; ?></td>
			<td><a class="btn btn-success" onclick="TomarArea2('<?php echo $fila['are_codigo']; ?>')"><i class="fa fa-check-square-o" aria-hidden="true" style="font-size: 20px;"></i></a></td>
		</tr>
		<?php
			} ?>
	</table>
</div>
<?php } ?>