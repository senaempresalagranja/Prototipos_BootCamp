<?php 
    require 'conexion.php';
    $conexion=new Conexion();
    $sql="SELECT * from sucursal";
    $conexion->buscar_query($sql);
    $result=$conexion->obtenerResult();
    $filas=$conexion->obtenerFilasAfectadas();
    $tabla = "";
    if ($filas>=1) {
        while ($fila=$result->fetch()) {

            $editar="<button class='btn btn-success btn-sm' onclick='editarSucursal(".$fila['suc_codigo'].")' data-toggle='modal' data-target='#editSucursal'><i class='ti-pencil'></i></button>";
            $estado="<button class='btn btn-warning btn-sm' onclick='editarEstadoSucursal(".$fila['suc_codigo'].")' data-toggle='modal' data-target='#editarESucursal'><i class='ti-view-list-alt'></i></button>";
            $eliminar="<button class='btn btn-danger btn-sm' onclick='eliminarSucursal(".$fila['suc_codigo'].")'><i class='ti-trash'></i></button>";
            $control="";

            $tabla.='{
                "control":"'.$control.'",
                "codigo":"'.$fila['suc_codigo'].'", 
                "nombre":"'.$fila['suc_nombre'].'",
                "direccion":"'.$fila['suc_direccion'].'",
                "telefono":"'.$fila['suc_telefono'].'",
                "celular":"'.$fila['suc_celular'].'",
                "estado":"'.$fila['suc_estado'].'",
                "boton":"'.$editar.$estado.$eliminar.'"                 
            },';
        }

        //eliminamos la coma que sobra
        $tabla = substr($tabla,0, strlen($tabla) - 1);

        echo '{"data":['.$tabla.']}';       
    }?>