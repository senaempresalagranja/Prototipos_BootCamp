<?php
session_start();
require 'Controlador/controlador.php';
require 'Modelo/gestor.php';
require 'Modelo/conexion.php';
require 'Modelo/sucursal.php';
require 'Modelo/usuario.php';
require 'Modelo/cliente.php';
require 'Modelo/tipousuario.php';
require 'Modelo/area.php';
require 'Modelo/Pqrs.php';


$controlador= new Controlador;
if(isset($_SESSION["login_usu"])){
    if(isset($_GET['accion']) ){
        if ($_GET['accion']=='logout') {
			$controlador->Logout();
		}
        if ($_GET['accion']=='inicio') {
            require 'Vista/html/panel_principal.php';
        }    
        //Sucursal
        if ($_GET['accion']=='sucursal') {
            require 'Vista/html/panel_sucursal.php';
        }
        if ($_GET['accion']=='registroSucursal') {
            $controlador->registroSucursal($_REQUEST["suc_nombre"],$_REQUEST["suc_direccion"],$_REQUEST["suc_telefono"],$_REQUEST["suc_celular"],$_REQUEST["suc_estado"]);
        }
        if ($_GET['accion']=='editarSucursal'){
            $controlador->editarSucursal($_REQUEST['codigo']);
        }
        if ($_GET['accion']=='actualizarSucursal') {
            $controlador->actualizarSucursal($_REQUEST["suc_codigo"],$_REQUEST["suc_nombre"],$_REQUEST["suc_direccion"],$_REQUEST["suc_telefono"],$_REQUEST["suc_celular"]);
        }
        if ($_GET['accion']=='editarEstadoSucursal'){
            $controlador->editarEstadoSucursal($_REQUEST['codigo']);
        }

        if($_GET['accion']=='actualizarEstadoSuc'){
            $controlador->actualizarEstadoSuc($_REQUEST["suc_codigo"],$_REQUEST["suc_estado"]);
        }

        if ($_GET['accion']=='eliminarSucursal'){
            $controlador->eliminarSucursal($_REQUEST["codigo"]);
        }     
                
        //Usuario    
        if ($_GET['accion']=='usuario') {
            require 'Vista/html/panel_usuario.php';
        }
        if ($_GET['accion']=='registroUsuario') {
            $controlador->registroUsuario($_REQUEST["usu_identificacion"],$_REQUEST["usu_tipo"],$_REQUEST["usu_area"],$_REQUEST["usu_nombre"],$_REQUEST["usu_apellido"],$_REQUEST["usu_correo"],$_REQUEST["usu_celular"],$_REQUEST["usu_telefono"],$_REQUEST["usu_clave"],$_REQUEST["usu_estado"]);
        }
        if ($_GET['accion']=='editarUsuario'){
            $controlador->editarUsuario($_REQUEST['codigo']);
        }
        if ($_GET['accion']=='actualizarUsuario') {
            $controlador->actualizarUsuario($_REQUEST["usu_identificacion"],$_REQUEST["usu_tipo"],$_REQUEST["usu_area"],$_REQUEST["usu_nombre"],$_REQUEST["usu_apellido"],$_REQUEST["usu_correo"],$_REQUEST["usu_celular"],$_REQUEST["usu_telefono"],$_REQUEST["usu_clave"]);
        }
        if ($_GET['accion']=='editarEstadoUsuario'){
            $controlador->editarEstadoUsuario($_REQUEST['codigo']);
        }

        if($_GET['accion']=='actualizarEstadoUsu'){
            $controlador->actualizarEstadoUsu($_REQUEST["usu_identificacion"],$_REQUEST["usu_estado"]);
        }

        if ($_GET['accion']=='eliminarUsuario'){
            $controlador->eliminarUsuario($_REQUEST["codigo"]);
        }     
        //Tipo de Usuario
        if ($_GET['accion']=='tipo_usuario') {
            require 'Vista/html/panel_tipo_usuario.php';
        } 
        if ($_GET['accion']=='registroTipoUsuario') {
        $controlador->registroTipoUsuario($_REQUEST['tusu_codigo'],$_REQUEST['tusu_nombre'],$_REQUEST['tusu_estado']);
        }

        if ($_GET['accion']=='editarTipoUsuario') {
        $controlador->editarTipoUsuario($_REQUEST['codigo']);
        }

        if ($_GET['accion']=='actualizarTipoUsuario') {
        $controlador->actualizarTipoUsuario($_REQUEST['tusu_codigo'],$_REQUEST['tusu_nombre']);
        }

        if ($_GET['accion']=='editarEstadoTipoUsuario') {
        $controlador->editarEstadoTipoUsuario($_REQUEST['codigo']);
        }

        if ($_GET['accion']=='actualizarEstadoTipoUsu') {
        $controlador->actualizarEstadoTipoUsu($_REQUEST['tusu_codigo'],$_REQUEST['tusu_estado']);
        }

        if ($_GET['accion']=='eliminarTipoUsuario') {
        $controlador->eliminarTipoUsuario($_POST['codigo']);
        }
        //Cliente
        if ($_GET['accion']=='cliente') {
            require 'Vista/html/panel_cliente.php';      
        }

        if ($_GET['accion']=='registroCliente') {
            $controlador->registroCliente($_REQUEST["cli_identificacion"],$_REQUEST["cli_nombre"],$_REQUEST["cli_apellido"],$_REQUEST["cli_correo"],$_REQUEST["cli_celular"],$_REQUEST["cli_telefono"],$_REQUEST["cli_estado"]);
        }

        if ($_GET['accion']=='editarCliente') {
            $controlador->editarCliente($_REQUEST['codigo']);
        }

        if ($_GET['accion']=='actualizarCliente') {
            $controlador->actualizarCliente($_REQUEST["cli_identificacion"],$_REQUEST["cli_nombre"],$_REQUEST["cli_apellido"],$_REQUEST["cli_correo"],$_REQUEST["cli_celular"],$_REQUEST["cli_telefono"]);
        } 

        if ($_GET['accion']=='editarEstadoCliente'){
            $controlador->editarEstadoCliente($_REQUEST['codigo']);
        }

        if($_GET['accion']=='actualizarEstadoCli'){
            $controlador->actualizarEstadoCli($_REQUEST["cli_identificacion"],$_REQUEST["cli_estado"]);
        }

        if ($_GET['accion']=='eliminarCliente'){
            $controlador->eliminarCliente($_POST["codigo"]);
        }    
        
        //area
        if ($_GET['accion']=='area') {
            require 'Vista/html/panel_area.php';
        }
        if ($_GET['accion']=='registroArea') {
            $controlador->registroArea($_REQUEST["are_codigo"],$_REQUEST["are_sucursal"],$_REQUEST["are_nombre"],$_REQUEST["are_ubicacion"],$_REQUEST["are_estado"]);
        }
        if ($_GET['accion']=='editarArea'){
            $controlador->editarArea($_REQUEST['codigo']);
        }
        if ($_GET['accion']=='actualizArea') {
            $controlador->actualizArea($_REQUEST["are_codigo"],$_REQUEST["are_sucursal"],$_REQUEST["are_nombre"],$_REQUEST["are_ubicacion"]);
        }
        if ($_GET['accion']=='editarEArea'){
            $controlador->editarEArea($_REQUEST['codigo']);
        }
        if($_GET['accion']=='actualizarEArea'){
            $controlador->actualizarEArea($_REQUEST["are_codigo"],$_REQUEST["are_estado"]);
        }
        if ($_GET['accion']=='eliminarArea'){
            $controlador->eliminarArea($_REQUEST["codigo"]);
        }  
        //PQRS
        if ($_GET['accion']=='pqrs') {
            require 'Vista/html/inicio.php';
        }
        if ($_GET['accion']=='verPqrs') {
            require 'Vista/html/panel_PQRS.php';
        }
        if ($_GET['accion']=='pqrsVer') {
            
            $controlador->pqrsVer($_REQUEST['codigo']);
        }

        if ($_GET['accion']=='registrarPQRS') {
            if($_FILES['pqrs_evidencia']['name'] == ""){
                echo "vacio";
                }

            $codigo=$_REQUEST["id_cliente"];
            $extencion=explode(".", $_FILES['pqrs_evidencia']['name']);
            $imagen=$codigo.".".$extencion[1];
            $carpeta = "Vista/imagenes/evidencias/";
            opendir($carpeta);
            $destino=$carpeta.$imagen;
            copy($_FILES['pqrs_evidencia']['tmp_name'],$destino);
            $org_info = getimagesize($carpeta.$imagen);
            if($extencion[1]=='jpg' || $extencion[1]=='JPG' ){
            $rsr_org = imagecreatefromjpeg($carpeta.$imagen);
            $rsr_scl = imagescale($rsr_org, 400, 600, IMG_BICUBIC_FIXED);
            imagejpeg($rsr_scl, $carpeta.$codigo.".".$extencion[1]);
            }else if($extencion[1]=='png' || $extencion[1]=='PNG' ){
            $rsr_org = imagecreatefrompng($carpeta.$imagen);
            $rsr_scl = imagescale($rsr_org, 400, 600, IMG_BICUBIC_FIXED);
            imagepng($rsr_scl, $carpeta.$codigo.".".$extencion[1]);
            }
            $valor=$codigo.".".$extencion[1];
            imagedestroy($rsr_org);
            imagedestroy($rsr_scl);
            $controlador->registrarPQRS($_REQUEST["tipo_pqrs"],$_REQUEST["id_cliente"],$_REQUEST["sucursal_cod"],$_REQUEST["texto"],$valor);
        }
        if ($_GET['accion']=='asignarEncargado') {        
            $controlador->asignarEncargado($_REQUEST["consecutivo"],$_REQUEST["cod_area"],$_REQUEST["id_usuario"]);
        }
        if ($_GET['accion']=='editarPqrs') {        
            $controlador->editarPqrs($_REQUEST["consecutivo"],$_REQUEST["procedimiento"],$_REQUEST["observacion"]);
        }
    }
    else{
        $controlador->verInicio("Vista/html/inicio.php");
    }
}
else{
	if (isset($_GET["accion"])) {
		switch ($_GET["accion"]) {
			case 'login':
				$controlador->login($_POST["usu_identificacion"],$_POST["usu_clave"]);
			break;
		
			default:
				$controlador->verInicio("Vista/html/inicio.php");
			break;
		}
	}
	else{
		$controlador->verInicio("Vista/html/inicio.php");
	}
}    
?>