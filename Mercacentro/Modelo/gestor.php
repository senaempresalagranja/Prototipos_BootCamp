<?php

class Gestor {
    //Login  
    public function login($usu_identificacion, $usu_clave){
      $conexion = new Conexion();
      $sql = "SELECT * FROM usuario WHERE usu_identificacion = '$usu_identificacion' AND usu_clave = '$usu_clave'";
      $conexion->buscar_query($sql);
      $existe = $conexion->ObtenerFilasAfectadas();
      if($existe>0){
        $result = $conexion->obtenerResult();
        $filas = $result->fetch();
        $datos = $filas["usu_identificacion"];
        return $datos;
      }
      else{
        $sql2 = "SELECT usu_identificacion, usu_clave FROM usuario WHERE usu_identificacion = '$usu_identificacion'";
        $conexion->buscar_query($sql2);
        $existe2 = $conexion->ObtenerFilasAfectadas();
        if($existe2>0){
          return 1;
        }
        else{
          return 2;
        }
      }
    }
    public function LogUsuario($usu_identificacion){
    $conexion = new Conexion();  
    $sql= "SELECT * FROM usuario WHERE usu_identificacion = $usu_identificacion ";
    $conexion ->buscar_query($sql);
    $resultlog=$conexion->obtenerResult();
    return $resultlog;
    }
    //Login
    //Sucursal
    public function registroSucursal(Sucursal $sucursal){
        $conexion=new Conexion();
        $suc_nombre=$sucursal->obtenerSucursalNombre();
        $suc_direccion=$sucursal->obtenerSucursalDireccion();
        $suc_telefono=$sucursal->obtenerSucursalTelefono();
        $suc_celular=$sucursal->obtenerSucursalCelular();
        $suc_estado=$sucursal->obtenerSucursalEstado();
        $sql = "INSERT INTO sucursal VALUES(NULL,'$suc_nombre','$suc_direccion','$suc_telefono','$suc_celular','$suc_estado')";
        $conexion->ejecutar_query($sql);
        $result=$conexion->obtenerResult();
    }

    public function editarSucursal($cod){
      $conexion= new Conexion();
      $codigo=$cod;
      $sql="SELECT suc_codigo , suc_nombre , suc_direccion, suc_telefono, suc_celular FROM sucursal WHERE suc_codigo='$codigo'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerResult();
      return $result;
    }

    public function actualizarSucursal($suc_codigo,$suc_nombre,$suc_direccion,$suc_telefono,$suc_celular){
      $conexion= new Conexion();   
      $sql="UPDATE sucursal SET  suc_nombre='$suc_nombre', suc_direccion='$suc_direccion', suc_telefono='$suc_telefono', suc_celular='$suc_celular' WHERE suc_codigo=$suc_codigo";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function editarEstadoSucursal($cod) {
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "SELECT * FROM sucursal WHERE suc_codigo='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarEstadoSuc($suc_codigo,$suc_estado) {
      $conexion=new Conexion();
      $sql="UPDATE sucursal SET suc_estado='$suc_estado' WHERE suc_codigo='$suc_codigo'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function eliminarSucursal($cod){
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "DELETE FROM sucursal WHERE suc_codigo='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    //Sucursal
    //Usuario
    public function registroUsuario(Usuario $usuario){
      $conexion = new Conexion();
      $usu_identificacion=$usuario->obtenerUsuarioIdentificacion();
      $usu_tipo=$usuario->obtenerUsuarioTipo();
      $usu_area=$usuario->obtenerUsuarioArea();
      $usu_nombre=$usuario->obtenerUsuarioNombre();
      $usu_apellido=$usuario->obtenerUsuarioApellido();
      $usu_correo=$usuario->obtenerUsuarioCorreo();
      $usu_celular=$usuario->obtenerUsuarioCelular();
      $usu_telefono=$usuario->obtenerUsuarioTelefono();
      $usu_clave=$usuario->obtenerUsuarioClave();
      $usu_estado=$usuario->obtenerUsuarioEstado();
      $sql = "INSERT INTO usuario VALUES('$usu_identificacion','$usu_tipo','$usu_area','$usu_nombre','$usu_apellido','$usu_correo','$usu_celular','$usu_telefono','$usu_clave','$usu_estado')";
      $conexion->ejecutar_query($sql);
      $result=$conexion->obtenerResult();
    }

    public function editarUsuario($cod){
      $conexion= new Conexion();
      $codigo=$cod;
      $sql="SELECT usu_identificacion , usu_tipo , usu_area , usu_nombre , usu_apellido , usu_correo , usu_celular , usu_telefono , usu_clave FROM usuario WHERE usu_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerResult();
      return $result;
    }

    public function actualizarUsuario($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave){
      $conexion= new Conexion();   
      $sql="UPDATE usuario SET usu_identificacion='$usu_identificacion', usu_tipo='$usu_tipo' , usu_area='$usu_area' , usu_nombre='$usu_nombre' , usu_apellido='$usu_apellido' , usu_correo='$usu_correo' , usu_celular='$usu_celular' , usu_telefono='$usu_telefono' , usu_clave='$usu_clave' WHERE usu_identificacion=$usu_identificacion";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function editarEstadoUsuario($cod) {
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "SELECT * FROM usuario WHERE usu_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarEstadoUsu($usu_identificacion,$usu_estado) {
      $conexion=new Conexion();
      $sql="UPDATE usuario SET usu_estado='$usu_estado' WHERE usu_identificacion='$usu_identificacion'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function eliminarUsuario($cod){
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "DELETE FROM usuario WHERE usu_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    //Usuario
    //Cliente
      public function registroCliente(Cliente $cliente){
      $conexion=new Conexion();
      $cli_identificacion=$cliente->obtenerClienteIdentificacion();
      $cli_nombre=$cliente->obtenerClienteNombre();
      $cli_apellido=$cliente->obtenerClienteApellido();
      $cli_correo=$cliente->obtenerClienteCorreo();
      $cli_celular=$cliente->obtenerClienteCelular();
      $cli_telefono=$cliente->obtenerClienteTelefono();
      $cli_estado=$cliente->obtenerClienteEstado();
      $sql = "INSERT INTO cliente VALUES('$cli_identificacion','$cli_nombre','$cli_apellido','$cli_correo','$cli_celular','$cli_telefono','$cli_estado')";
      $conexion->ejecutar_query($sql);
      $result=$conexion->obtenerResult();
    }

    public function editarCliente($cod){
      $conexion= new Conexion();
      $codigo=$cod;
      $sql="SELECT cli_identificacion , cli_nombre , cli_apellido , cli_correo , cli_celular , cli_telefono FROM cliente WHERE cli_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerResult();
      return $result;
    }

    public function actualizarCliente($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono){
      $conexion=new Conexion();
      $sql = "UPDATE cliente SET cli_nombre = '$cli_nombre', cli_apellido = '$cli_apellido', cli_correo = '$cli_correo', cli_celular = '$cli_celular', cli_telefono = '$cli_telefono' WHERE cli_identificacion = '$cli_identificacion'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
    }

    public function editarEstadoCliente($cod) {
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "SELECT * FROM cliente WHERE cli_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarEstadoCli($cli_identificacion,$cli_estado) {
      $conexion=new Conexion();
      $sql="UPDATE cliente SET cli_estado='$cli_estado' WHERE cli_identificacion='$cli_identificacion'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function eliminarCliente($cod){
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "DELETE FROM cliente WHERE cli_identificacion='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    //Cliente
    //TipoUsuario
    public function registroTipoUsuario(TipoUsuario $tipousuario){
      $conexion = new Conexion();
      $tusu_codigo=$tipousuario->obtenertusu_codigo();
      $tusu_nombre=$tipousuario->obtenertusu_nombre();
      $tusu_estado=$tipousuario->obtenertusu_estado();
      $sql = "INSERT INTO tipo_usuario VALUES ('$tusu_codigo','$tusu_nombre','$tusu_estado')";
      $conexion->ejecutar_query($sql);
    }

    public function editarTipoUsuario($cod){
      $conexion = new Conexion();
      $sql = "SELECT * FROM tipo_usuario WHERE tusu_codigo = '$cod'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarTipoUsuario($tusu_codigo,$tusu_nombre){
      $conexion = new Conexion();
      $sql = "UPDATE tipo_usuario SET tusu_nombre = '$tusu_nombre' WHERE tusu_codigo = '$tusu_codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerFilasAfectadas();
    }

    public function editarEstadoTipoUsuario($cod){
      $conexion = new Conexion();
      $sql = "SELECT * FROM tipo_usuario WHERE tusu_codigo = '$cod'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarEstadoTipoUsu($tusu_codigo,$tusu_estado){
      $conexion = new Conexion();
      $sql = "UPDATE tipo_usuario SET tusu_estado = '$tusu_estado' WHERE tusu_codigo = '$tusu_codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerFilasAfectadas();
    }

    public function eliminarTipoUsuario($cod){
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "DELETE FROM tipo_usuario WHERE tusu_codigo='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    //Tipo Usuario
    //area
    public function registroArea(Area $area){
      $conexion = new Conexion();
      $are_codigo=$area->obtenerAreaCodigo();
      $are_sucursal=$area->obtenerAreaSucursal();
      $are_nombre=$area->obtenerAreaNombre();
      $are_ubicacion=$area->obtenerAreaUbicacion();
      $are_estado=$area->obtenerAreaEstado();
      $sql = "INSERT INTO area VALUES ('$are_codigo','$are_sucursal','$are_nombre','$are_ubicacion','$are_estado')";
      $conexion->ejecutar_query($sql);
    }

    public function editarArea($cod){
      $conexion = new Conexion();
      $sql = "SELECT * FROM area WHERE are_codigo = '$cod'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizArea($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion){
      $conexion= new Conexion();   
      $sql=" UPDATE area SET  are_sucursal = '$are_sucursal', are_nombre = '$are_nombre', are_ubicacion = '$are_ubicacion' WHERE are_codigo = '$are_codigo'";
      $conexion->buscar_query($sql);
      $result=$conexion->obtenerFilasAfectadas();
      return $result;
    }

    public function editarEArea($cod){
      $conexion = new Conexion();
      $sql = "SELECT * FROM area WHERE are_codigo = '$cod'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }

    public function actualizarEArea($are_codigo,$are_estado){
      $conexion = new Conexion();
      $sql = "UPDATE area SET are_estado = '$are_estado' WHERE are_codigo = '$are_codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerFilasAfectadas();
    }

    public function eliminarArea($cod){
      $conexion = new Conexion();
      $codigo = $cod;
      $sql = "DELETE FROM area WHERE are_codigo='$codigo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    //area
    //pqrs
    public function registrarPQRS(Pqrs $pqrs){
      $conexion = new Conexion();
      $tipo_pqrs=$pqrs->obtenerTipopqrs();
      $id_cliente=$pqrs->obtenerCliente();
      $sucursal_cod=$pqrs->obtenerSucursal();
      $texto=$pqrs->obtenerTexto();
      $pqrs_evidencia=$pqrs->obtenerevidencia();
      date_default_timezone_set('America/Bogota');
      $fecha_registro=date('y-m-d');
      $sql = "INSERT INTO pqrs (tipo_pqrs,id_cliente,sucursal_cod,texto,pqrs_evidencia,fecha_registro,estado) VALUES ('$tipo_pqrs','$id_cliente','$sucursal_cod','$texto','$pqrs_evidencia','$fecha_registro','Enviado')";
      $conexion->ejecutar_query($sql);
      $result=$conexion->obtenerId();
      return $result;
    }

    public function registrarPQRS2($id){
      $conexion = new Conexion();
      $sql2= "SELECT * FROM cliente JOIN pqrs ON cliente.cli_identificacion=pqrs.id_cliente where pqrs.consecutivo='$id'";
      $conexion->buscar_query($sql2);
      $result2 = $conexion->obtenerResult();
      return $result2;
    }
    public function pqrsVer($cod){
      $conexion = new Conexion();
      $sql = "SELECT * FROM pqrs JOIN sucursal ON pqrs.sucursal_cod=sucursal.suc_codigo JOIN cliente ON pqrs.id_cliente=cliente.cli_identificacion WHERE pqrs.consecutivo = '$cod'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerResult();
      return $result;
    }
    public function asignarEncargado($consecutivo,$cod_area,$id_usuario){
      $conexion = new Conexion();
      $sql = "UPDATE pqrs SET cod_area = '$cod_area', id_usuario = '$id_usuario', estado = 'Asignado' WHERE consecutivo = '$consecutivo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerFilasAfectadas();
    }
    public function editarPqrs($consecutivo,$procedimiento,$observacion){
      $conexion = new Conexion();
      date_default_timezone_set('America/Bogota');
      $fecha_respuesta=date('y-m-d');
      $sql = "UPDATE pqrs SET procedimiento = '$procedimiento', observacion = '$observacion', fecha_respuesta = '$fecha_respuesta', estado = 'Respondido' WHERE consecutivo = '$consecutivo'";
      $conexion->buscar_query($sql);
      $result = $conexion->obtenerFilasAfectadas();
    }

    //pqrs
}
?>