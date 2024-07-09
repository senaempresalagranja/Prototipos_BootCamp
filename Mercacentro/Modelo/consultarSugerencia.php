<?php 
    require 'conexion.php';
    $conexion=new Conexion();
    $sql="SELECT * from pqrs join cliente on pqrs.id_cliente = cliente.cli_identificacion WHERE tipo_pqrs='Sugerencia'";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $codigo=$fila['consecutivo']; 
            $ver="<a class='btn btn-primary' href='index.php?accion=pqrsVer&codigo=$codigo'><i class='ti-files'></i></a>";
            $control="";
            $tabla.='{
                "control":"'.$control.'",
                "codigo":"'.$fila['consecutivo'].'", 
                "tipo":"'.$fila['tipo_pqrs'].'",
                "sucursal":"'.$fila['sucursal_cod'].'",
                "PQRS":"'.$fila['texto'].'",
                "cliente":"'.$fila['cli_nombre'].' '.$fila['cli_apellido'].'",
                "fecha_registro":"'.$fila['fecha_registro'].'",
                "estado":"'.$fila['estado'].'",
                "boton":"'.$ver.'"                 
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }
?>