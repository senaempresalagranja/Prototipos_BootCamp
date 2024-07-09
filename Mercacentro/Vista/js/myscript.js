$(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $("#tipo_pqrs").attr('readonly',true);
})

$("#peticion").click(function(){
	$("#tipo_pqrs").val('Peticion');
});

$("#queja").click(function(){
	$("#tipo_pqrs").val('Queja');
});

$("#reclamo").click(function(){
	$("#tipo_pqrs").val('Reclamo');
});

$("#sugerencia").click(function(){
	$("#tipo_pqrs").val('Sugerencia');
});

$("#felicitacion").click(function(){
	$("#tipo_pqrs").val('Felicitacion');
});





      