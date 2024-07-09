<?php 
    require 'conexion.php';
    $conexion=new Conexion();
    $sql="SELECT * from tipo_usuario";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $editar="<button class='btn btn-success btn-sm'  onclick='editarTipoUsuario(".$fila['tusu_codigo'].")' data-toggle='modal' data-target='#editTipoUsuario'><i class='ti-pencil'></i></button>";
            $estado="<button class='btn btn-warning btn-sm'  onclick='editarEstadoTipoUsuario(".$fila['tusu_codigo'].")'  data-toggle='modal' data-target='#editarEstadoTipoUsuario'><i class='ti-view-list-alt'></i></button>";
            $eliminar="<button class='btn btn-danger btn-sm'  onclick='eliminarTipoUsuario(".$fila['tusu_codigo'].")'><i class='ti-trash'></i></button>";
            $control="";

            $tabla.='{
                "control":"'.$control.'",
                "codigo":"'.$fila['tusu_codigo'].'", 
                "nombre":"'.$fila['tusu_nombre'].'",
                "estado":"'.$fila['tusu_estado'].'",
                "boton":"'.$editar.$estado.$eliminar.'"                 
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }?>