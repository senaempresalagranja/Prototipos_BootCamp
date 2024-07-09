<?php 

	require "conexion.php";
	$conexion = new Conexion();

	if (empty($_POST['frmarea']) && empty($_POST['fecha_inicial1']) && empty($_POST['fecha_final1'])) {
		$sql = "SELECT sucursal.suc_nombre,pqrs.tipo_pqrs,COUNT(pqrs.tipo_pqrs) AS pqrs FROM pqrs JOIN sucursal ON sucursal.suc_codigo=pqrs.sucursal_cod GROUP BY pqrs.tipo_pqrs,sucursal.suc_codigo";
	}else{
		$area = $_POST['frmarea'];
		$startDate1 = $_POST['fecha_inicial1'];
		$endDate1 = $_POST['fecha_final1'];
		$sql = "SELECT sucursal.suc_nombre,pqrs.tipo_pqrs,COUNT(pqrs.tipo_pqrs) AS pqrs FROM pqrs JOIN sucursal ON sucursal.suc_codigo=pqrs.sucursal_cod WHERE pqrs.cod_area = '$area' AND pqrs.fecha_registro BETWEEN '$startDate1' AND '$endDate1' GROUP BY pqrs.tipo_pqrs,sucursal.suc_codigo";
	}

	$data[] = array('Pqrs','Calificacion');
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	while($filas = $result->fetch())
	{
		$data[] = array($filas['tipo_pqrs']." ".$filas['suc_nombre'],(int)$filas['pqrs']);
	}	      
	
	echo json_encode($data);

?>