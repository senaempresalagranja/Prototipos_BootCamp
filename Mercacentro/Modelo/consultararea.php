<?php 
    require 'conexion.php';
    $conexion=new Conexion();
    $sql="SELECT * FROM area";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $editar="<button class='btn btn-success btn-sm'  onclick='editarArea(".$fila['are_codigo'].")' data-toggle='modal' data-target='#editararea'><i class='ti-pencil'></i></button>";
            $estado="<button class='btn btn-warning btn-sm'  onclick='editarEArea(".$fila['are_codigo'].")'  data-toggle='modal' data-target='#editarEstadoarea'><i class='ti-view-list-alt'></i></button>";
            $eliminar="<button class='btn btn-danger btn-sm'  onclick='eliminarArea(".$fila['are_codigo'].")'><i class='ti-trash'></i></button>";
            $control="";

            $tabla.='{
                "control":"'.$control.'",
                "codigo":"'.$fila['are_codigo'].'", 
                "sucursal":"'.$fila['are_sucursal'].'", 
                "nombre":"'.$fila['are_nombre'].'",
                "ubicacion":"'.$fila['are_ubicacion'].'",
                "estado":"'.$fila['are_estado'].'",
                "boton":"'.$editar.$estado.$eliminar.'"                 
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }?>