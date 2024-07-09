<?php 
    require 'conexion.php';
    $conexion = new Conexion();
    $sql="SELECT * FROM usuario";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $editar="<button class='btn btn-success btn-sm'  onclick='editarUsuario(".$fila['usu_identificacion'].")' data-toggle='modal' data-target='#editUsuario'><i class='ti-pencil'></i></button>";
            $estado="<button class='btn btn-warning btn-sm'  onclick='editarEstadoUsuario(".$fila['usu_identificacion'].")' data-toggle='modal' data-target='#editarEUsuario'><i class='ti-view-list-alt'></i></button>";
            $eliminar="<button class='btn btn-danger btn-sm'  onclick='eliminarUsuario(".$fila['usu_identificacion'].")'><i class='ti-trash'></i></button>";
            $control="";

            $tabla.='{
                "control":"'.$control.'",
                "identificacion":"'.$fila['usu_identificacion'].'", 
                "tipo":"'.$fila['usu_tipo'].'", 
                "area":"'.$fila['usu_area'].'", 
                "nombre":"'.$fila['usu_nombre'].'", 
                "apellido":"'.$fila['usu_apellido'].'", 
                "correo":"'.$fila['usu_correo'].'", 
                "celular":"'.$fila['usu_celular'].'", 
                "telefono":"'.$fila['usu_telefono'].'", 
                "clave":"'.$fila['usu_clave'].'",
                "estado":"'.$fila['usu_estado'].'",
                "boton":"'.$editar.$estado.$eliminar.'"                 
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }?>