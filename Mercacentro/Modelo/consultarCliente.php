<?php 
    require 'conexion.php';
    $conexion=new Conexion();
    $sql="SELECT * from cliente";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $editar="<button class='btn btn-success btn-sm' onclick='editarCliente(".$fila['cli_identificacion'].")' data-toggle='modal' data-target='#editCliente'><i class='ti-pencil'></i></button>";
            $estado="<button class='btn btn-warning btn-sm' onclick='editarEstadoCliente(".$fila['cli_identificacion'].")' data-toggle='modal' data-target='#editarCliente'><i class='ti-view-list-alt'></i></button>";
            $eliminar="<button class='btn btn-danger btn-sm' onclick='eliminarCliente(".$fila['cli_identificacion'].")'><i class='ti-trash'></i></button>";
            $control="";

            $tabla.='{
                "control":"'.$control.'",
                "identificacion":"'.$fila['cli_identificacion'].'", 
                "nombre":"'.$fila['cli_nombre'].'",
                "apellido":"'.$fila['cli_apellido'].'",
                "correo":"'.$fila['cli_correo'].'",
                "celular":"'.$fila['cli_celular'].'",
                "telefono":"'.$fila['cli_telefono'].'",
                "estado":"'.$fila['cli_estado'].'",
                "boton":"'.$editar.$estado.$eliminar.'"                
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }?>