google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawBasic,drawBasic1);

function drawBasic(){

	var fecha_inicial = $("#fecha_inicial").val(),
		fecha_final = $("#fecha_final").val();

	$.ajax({
		url:'Modelo/columnpqr.php',
		type:'POST',
		data:{fecha_inicial:fecha_inicial,fecha_final:fecha_final},
		dataType:'JSON'
	}).done(function(datos){
		var data = new google.visualization.arrayToDataTable(datos);
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
		chart.draw(data,{
			width:"100%",
			title:'Informacion PQRS'
		});
		console.log(datos);
	});

	$("#fecha_inicial").val('');
	$("#fecha_final").val('');		

}

google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawBasic1);

function drawBasic1(){

	var frmarea = $("#frmarea").val(),
		fecha_inicial = $("#fecha_inicial1").val(),
		fecha_final = $("#fecha_final1").val();

	$.ajax({
		url:'Modelo/columnpqr1.php',
		type:'POST',
		data:{frmarea:frmarea,fecha_inicial1:fecha_inicial,fecha_final1:fecha_final},
		dataType:'JSON'
	}).done(function(datos){
		var data = new google.visualization.arrayToDataTable(datos);
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values1'));
		chart.draw(data,{
			width:"100%",
			title:'Informacion PQRS'
		});
		console.log(datos);
	});

	$("#fecha_inicial1").val('');
	$("#fecha_final1").val('');		

}

$(window).resize(function(){
	  drawBasic();
	  drawBasic1();
});