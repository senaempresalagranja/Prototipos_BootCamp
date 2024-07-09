$(function(){
	ConsulArea();
})

function ConsulArea(){
	$.post("Modelo/ConsulArea.php",{},function(data){
		$("#frmarea").html(data);
	});
}	
//Sucursal
function editarSucursal(cod){
	var codigo=cod;
	var url="index.php?accion=editarSucursal&codigo="+codigo+"";
	$("#frmActualizarSuc").load(url);
}

function editarEstadoSucursal(cod){
    var codigo=cod;
  	var url="index.php?accion=editarEstadoSucursal&codigo="+codigo+"";
  	$("#frmEditar_EstadoSuc").load(url);
}

function eliminarSucursal(cod){
    var codigo = cod;
	$.post ("index.php?accion=eliminarSucursal&codigo="+cod+"");
	window.location="index.php?accion=sucursal";	
}
//sucursal
//Usuario
function editarUsuario(cod){
	var codigo=cod;
	var url="index.php?accion=editarUsuario&codigo="+codigo+"";
	$("#frmActualizarUsu").load(url);
}

function editarEstadoUsuario(cod){
    var codigo=cod;
  	var url="index.php?accion=editarEstadoUsuario&codigo="+codigo+"";
  	$("#frmEditar_EstadoUsu").load(url);
}

function eliminarUsuario(cod){
    var codigo = cod;	
	$.post("index.php?accion=eliminarUsuario&codigo="+codigo+"");			
	window.location="index.php?accion=usuario";
}
//Usuario
//Cliente
 function editarCliente(cod){
 	var codigo = cod;
 	var url='index.php?accion=editarCliente&codigo='+codigo+"";
 	$("#frmActualizarCli").load(url);
}

 function editarEstadoCliente(cod){
 	var codigo = cod;
 	var url='index.php?accion=editarEstadoCliente&codigo='+codigo+"";
 	$("#frmEditar_EstadoCli").load(url);
}

 function eliminarCliente(cod){
    var codigo = cod;	
	$.post("index.php?accion=eliminarCliente&codigo="+codigo+"");	
	window.location="index.php?accion=cliente";
	
}
//Cliente
//TipoUsuario
function editarTipoUsuario(cod){
 	var codigo = cod;
 	var url='index.php?accion=editarTipoUsuario&codigo='+codigo+"";
 	$("#frmActualizarTipoUsu").load(url);
}

function editarEstadoTipoUsuario(cod){
 	var codigo = cod;
 	var url='index.php?accion=editarEstadoTipoUsuario&codigo='+codigo+"";
 	$("#frmEditar_EstadoTipoUsu").load(url);
}

function eliminarTipoUsuario(cod){
    var codigo = cod;
	$.post("index.php?accion=eliminarTipoUsuario&codigo="+codigo+"");
	window.location="index.php?accion=tipo_usuario";
}
//TipoUsuario
//area
function editarArea(cod){
	var codigo = cod;
	var url='index.php?accion=editarArea&codigo='+codigo+"";
	$("#frmActualizarArea").load(url);
}

function editarEArea(cod){
	var codigo = cod;
	var url='index.php?accion=editarEArea&codigo='+codigo+"";
	$("#frmEditar_EstadoArea").load(url);
}

function eliminarArea(cod){
   var codigo = cod;
   $.post("index.php?accion=eliminarArea&codigo="+codigo+"");
   window.location="index.php?accion=area";
}

function consultarSucursal(){
	$.post("Modelo/consultar_Sucursal.php",{},function(mensaje){
		$("#resultadoSucursal").html(mensaje);
	});
}
//area
//pqrs
function cargarArea(){
	$.post("Modelo/cargarArea.php",{}, function(mensaje){
		$("#cargar_Area").html(mensaje);
	});
}
function cargarArea2(){
	$.post("Modelo/cargarArea2.php",{}, function(mensaje){
		$("#cargar_Area2").html(mensaje);
	});
}
function cargarEmcargado(){
	$.post("Modelo/cargarEncargado.php",{}, function(mensaje){
		$("#cargar_Encargado").html(mensaje);
	});
}
function cargarSucursal(){
	$.post("Modelo/cargarSucursal.php",{}, function(mensaje){
		$("#cargar_Sucursal").html(mensaje);
	});
}
function cargarTusuario(){
	$.post("Modelo/cargarTusuario.php",{}, function(mensaje){
		$("#cargar_Tusuario").html(mensaje);
	});
}
function TomarArea(cod){    
	document.getElementById('cod_area').value=cod;
   	$('#cargarArea').modal('hide');
}
function TomarArea2(cod){    
	document.getElementById('usu_area').value=cod;
   	$('#cargarArea2').modal('hide');
}
function TomarEncargado(id){
	document.getElementById('id_usuario').value=id;
   	$('#cargarEncargado').modal('hide');
}
function TomarSucursal(cod){
	document.getElementById('are_sucursal').value=cod;
   	$('#cargarSucursal').modal('hide');
}
function TomarTusuario(usu){
	document.getElementById('usu_tipo').value=usu;
   	$('#cargarTusuario').modal('hide');
}
//pqrs