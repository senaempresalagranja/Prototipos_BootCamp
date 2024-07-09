<?php 

	require "conexion.php";
	$conexion = new Conexion();

	$sql = "SELECT are_codigo,are_nombre FROM area";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

?>	

	<option value="">--Seleccione el area--</option>

<?php 	

	while ($filas=$result->fetch()) {
	?>	
		
		<option value="<?php echo $filas['are_codigo'] ?>"><?php echo $filas['are_nombre'] ?></option>

	<?php 
	}

?>