<?php
class Controlador {
    
  public function verInicio($url) {
   require_once($url);
  }
  //Login
    public function login($usu_identificacion, $usu_clave){
      $gestor = new Gestor();
      $result = $gestor->login($usu_identificacion, $usu_clave);
      if ($result!=1 && $result!=2) {
        $resultlog = $gestor->LogUsuario($usu_identificacion);
        $row = $resultlog->fetch();
        $_SESSION["login_usu"] = $row['usu_identificacion'];
        require_once("Vista/html/panel_principal.php");
      }
      if ($result==1) {
        header("Location:index.php?error=1");
      }
      if ($result==2) {
        header("Location:index.php?error=2");
      }
    }
    public function Logout(){
      if (isset($_SESSION["usu_identificacion"])) {
        unset($_SESSION["usu_identificacion"]);
      }
      session_destroy();
      header("Location:index.php");
    }  
  //Login  
  //Sucursal
  public function registroSucursal($suc_nombre,$suc_direcion,$suc_telefono,$suc_celular,$suc_estado)
  {
    
    $sucursal=new Sucursal(null,$suc_nombre,$suc_direcion,$suc_telefono,$suc_celular,$suc_estado);
    $gestor=new Gestor();
    $result=$gestor->registroSucursal($sucursal);
    header("location:index.php?accion=sucursal");   
  }
  
  public function editarSucursal($cod)
  {
    $gestor=new Gestor();
    $result2=$gestor->editarSucursal($cod);
    require_once("Vista/html/actualizarsuc.php");
  }

  public function actualizarSucursal($suc_codigo,$suc_nombre,$suc_direcion,$suc_telefono,$suc_celular){
    $gestor= new Gestor();
    $result = $gestor->actualizarSucursal($suc_codigo,$suc_nombre,$suc_direcion,$suc_telefono,$suc_celular);
    header("location:index.php?accion=sucursal");
  }

  public function editarEstadoSucursal($cod) {
    $gestor = new Gestor();
    $result3 = $gestor->editarEstadoSucursal($cod);
    require_once("Vista/html/editarEstadoSucursal.php");
  }

  public function actualizarEstadoSuc($suc_codigo,$suc_estado) {
    $gestor=new Gestor();
    $result=$gestor->actualizarEstadoSuc($suc_codigo,$suc_estado); 
    header("location:index.php?accion=sucursal");  
  }

  public function eliminarSucursal($cod){
    $gestor = new Gestor();
    $result = $gestor->eliminarSucursal($cod);    
  }
  //Sucursal
  //Usuario
  public function registroUsuario($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave,$usu_estado)
  {    
    $usuario=new Usuario($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave,$usu_estado);
    $gestor=new Gestor();
    $result=$gestor->registroUsuario($usuario);
    header("location:index.php?accion=usuario");    
  }
  
  public function editarUsuario($cod)
  {
    $gestor=new Gestor();
    $result2=$gestor->editarUsuario($cod);
    require_once("Vista/html/actualizarusu.php");
  }

  public function actualizarUsuario($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave){
    $gestor= new Gestor();
    $result = $gestor->actualizarUsuario($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave);
    header("location:index.php?accion=usuario");
  }

  public function editarEstadoUsuario($cod) {
    $gestor = new Gestor();
    $result3 = $gestor->editarEstadoUsuario($cod);
    require_once("Vista/html/editarEstadousuario.php");
  }

  public function actualizarEstadoUsu($usu_identificacion,$usu_estado) {
    $gestor=new Gestor();
    $result=$gestor->actualizarEstadoUsu($usu_identificacion,$usu_estado); 
    header("location:index.php?accion=usuario");  
  }

  public function eliminarUsuario($cod){
    $gestor = new Gestor();
    $result = $gestor->eliminarUsuario($cod);
  }
  //Usuario
  //Cliente
  public function registroCliente($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono,$cli_estado)
  {    
    $cliente=new Cliente($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono,$cli_estado);
    $gestor=new Gestor();
    $result=$gestor->registroCliente($cliente);
    header("location:index.php?accion=cliente");
  }

  public function editarCliente($cod)
  {
    $gestor=new Gestor();
    $result2=$gestor->editarCliente($cod);
    require_once("Vista/html/actualizarcli.php");
  }

  public function actualizarCliente($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono)
  {
    $gestor=new Gestor();
    $result=$gestor->actualizarCliente($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono);
    header("location:index.php?accion=cliente");
  }

  public function editarEstadoCliente($cod) {
    $gestor = new Gestor();
    $result3 = $gestor->editarEstadoCliente($cod);
    require_once("Vista/html/editarEstadoCliente.php");
  }

  public function actualizarEstadoCli($cli_identificacion,$cli_estado) {
    $gestor=new Gestor();
    $result=$gestor->actualizarEstadoCli($cli_identificacion,$cli_estado); 
    header("location:index.php?accion=cliente");  
  }

   public function eliminarCliente($cod){
    $gestor = new Gestor();
    $result = $gestor->eliminarCliente($cod);
  }
  //Cliente
  //Tipo de Usuario
  public function registroTipoUsuario($tusu_codigo,$tusu_nombre,$tusu_estado){
    $tipousuario = new TipoUsuario($tusu_codigo,$tusu_nombre,$tusu_estado);
    $gestor = new Gestor();
    $result = $gestor->registroTipoUsuario($tipousuario);
    header("location:index.php?accion=tipo_usuario");
  }

  public function editarTipoUsuario($cod){
    $gestor = new Gestor();
    $result2 = $gestor->editarTipoUsuario($cod);
    require_once "Vista/html/actualizartipousu.php";
  }

  public function actualizarTipoUsuario($tusu_codigo,$tusu_nombre){
    $gestor = new Gestor();
    $result = $gestor->actualizarTipoUsuario($tusu_codigo,$tusu_nombre);
    header("location:index.php?accion=tipo_usuario");
  }

  public function editarEstadoTipoUsuario($cod){
    $gestor = new Gestor();
    $result3 = $gestor->editarEstadoTipoUsuario($cod);
    require "Vista/html/editarestadotipousu.php";
  }

  public function actualizarEstadoTipoUsu($tusu_codigo,$tusu_estado){
    $gestor = new Gestor();
    $result = $gestor->actualizarEstadoTipoUsu($tusu_codigo,$tusu_estado);
    header("location:index.php?accion=tipo_usuario");
  
  }

  public function eliminarTipoUsuario($cod){
    $gestor = new Gestor();
    $result = $gestor->eliminarTipoUsuario($cod);
  }
  //Tipo Usuario
  //area
  public function registroArea($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion,$are_estado){
    $area = new Area($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion,$are_estado);
    $gestor = new Gestor();
    $result = $gestor->registroArea($area);
    header("location:index.php?accion=area");
  }

  public function editarArea($cod){
    $gestor = new Gestor();
    $result2 = $gestor->editarArea($cod);
    require_once "Vista/html/actualizararea.php";
  }

  public function actualizArea($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion){
    $gestor = new Gestor();
    $result = $gestor->actualizArea($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion);
    require_once "Vista/html/actualizararea.php";    
  }

  public function editarEArea($cod){
    $gestor = new Gestor();
    $result3 = $gestor->editarEArea($cod);
    require "Vista/html/editarestadoarea.php";
  }

  public function actualizarEArea($are_codigo,$are_estado){
    $gestor = new Gestor();
    $result = $gestor->actualizarEArea($are_codigo,$are_estado);
    require_once "Vista/html/actualizararea.php";    
  }

  public function eliminarArea($cod){
    $gestor = new Gestor();
    $result = $gestor->eliminarArea($cod);
  }
  //area
  //pqrs
  public function registrarPQRS($tipo_pqrs,$id_cliente,$sucursal_cod,$texto,$pqrs_evidencia){
    $pqrs = new Pqrs($tipo_pqrs,$id_cliente,$sucursal_cod,$texto,$pqrs_evidencia);
    $gestor = new Gestor();
    $result = $gestor->registrarPQRS($pqrs);
    
    $result2=$gestor->registrarPQRS2($result);
    if ($result2!=""){
     

                                  while($row=$result2->fetch()){ 	
      //************ CONTENIDO EDITABLE ****************//
                    $con=$row['consecutivo'];              
                    $nom=$row['cli_nombre'];
                    $ape=$row['cli_apellido'];
                    $destino=$row['cli_correo'];
                   
                   require 'libreria/class.phpmailer.php';
                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->SMTPDebug  = 0;
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->Port       = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = "workplancampus@gmail.com";
                    $mail->Password   = "workplansena2017";
                    $mail->SetFrom('workplancampus@gmail.com', 'WorkPlan');
                    $mail->AddAddress($destino,'Usuario');
                    $mail->Subject = 'PQRS Registrado';
                    $mail->Body ="Sistema de Gestión de PQRS MERCACENTRO 

                        Señor(a):, ".$nom." ".$ape."

                        Su PQRS ha sido registrado con el siguiente codigo: ".$con."
                        muy pronto nos comunicaremos con usted para dar solución a su registro.";

                    $mail->AddEmbeddedImage("../vista/imagenes/mercalogo1.png", "my-attach", "mercalogo1.png");
                    $mail->CharSet = 'UTF-8';
                                 
                                  if(!$mail->Send()) {
                                    //echo "Error: " . $mail->ErrorInfo;
                                  } else {
                                    //echo "Enviado!";
                                   
                                  }
      }
      echo "<script>alert('Registro de PQRS Exitoso' );
      window.location = 'index.php?accion=inicio'</script>";
    } 
    else{
      }      
    // header("location:index.php?accion=pqrs");
  }
  public function pqrsVer($cod){
    $gestor = new Gestor();
    $result2 = $gestor->pqrsVer($cod);
    require "Vista/html/verPqrs.php";
  }
  
  public function asignarEncargado($consecutivo,$cod_area,$id_usuario){
    $gestor = new Gestor();
    $result = $gestor->asignarEncargado($consecutivo,$cod_area,$id_usuario);
    header("location:index.php?accion=pqrsVer&codigo=$consecutivo");
  }
  
  public function editarPqrs($consecutivo,$procedimiento,$observacion){
    $gestor = new Gestor();
    $result = $gestor->editarPqrs($consecutivo,$procedimiento,$observacion);
    header("location:index.php?accion=pqrsVer&codigo=$consecutivo");
  }
  
  //pqrs
}
?>
