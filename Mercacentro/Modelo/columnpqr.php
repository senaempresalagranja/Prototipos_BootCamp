<?php 

	require "conexion.php";
	$conexion = new Conexion();

	if (empty($_POST['fecha_inicial']) && empty($_POST['fecha_final'])) {
		$sql = "SELECT tipo_pqrs,COUNT(tipo_pqrs) AS pqrs FROM pqrs GROUP BY tipo_pqrs";
	}else{
		$startDate = $_POST['fecha_inicial'];
		$endDate = $_POST['fecha_final'];
		$sql = "SELECT tipo_pqrs,COUNT(tipo_pqrs) AS pqrs FROM `pqrs` WHERE fecha_registro BETWEEN '$startDate' AND '$endDate' GROUP BY tipo_pqrs";
	}

	$data[] = array('Pqrs','Calificacion');
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	while($filas = $result->fetch())
	{
		$data[] = array($filas['tipo_pqrs'],(int)$filas['pqrs']);
	}	      
	
	echo json_encode($data);

?>