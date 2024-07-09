$(document).ready(function() {
    $('#tablaSucursal').DataTable({
    	 responsive: {
            details: {
                type: 'column'
            }
        },
        autoFill: true,
                   
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ],
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
		"ajax": {
			"url": "Modelo/consultarSucursal.php",
        	"type": "POST"
		},	
				
		"columns": [
			{ "data": "control" },
			{ "data": "codigo" },
			{ "data": "nombre" },
			{ "data": "direccion" },
			{ "data": "telefono" },
			{ "data": "celular" },
			{ "data": "estado"},
			{ "data": "boton"}
			],
        "language": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     ">>",
		        "sPrevious": "<<"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	} );
	
	$('#tablaClientes').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,

	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarCliente.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "identificacion" },
		   { "data": "nombre" },
		   { "data": "apellido" },
		   { "data": "correo" },
		   { "data": "celular" },
		   { "data": "telefono"},
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
	   }
   } );


   $('#tablaTipoUsuario').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,

	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarTipoUsuario.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "nombre" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
	   }
   } );

   $('#tablaUsuario').DataTable({
	responsive: {
	   details: {
		   type: 'column'
	   }
   },
   autoFill: true,

   columnDefs: [ {
	   className: 'control',
	   orderable: false,
	   targets:   0
   } ],
   order: [ 1, 'asc' ],
   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
   "ajax": {
	   "url": "Modelo/consultarUsuario.php",
	   "type": "POST"
   },	
		   
   "columns": [
	   { "data": "control" },
	   { "data": "identificacion" },
	   { "data": "tipo" },
	   { "data": "area" },
	   { "data": "nombre" },
	   { "data": "apellido" },
	   { "data": "correo" },
	   { "data": "celular" },
	   { "data": "telefono" },
	   { "data": "clave" },
	   { "data": "estado"},
	   { "data": "boton"}
	   ],
   "language": {
	   "sProcessing":     "Procesando...",
	   "sLengthMenu":     "Mostrar _MENU_ registros",
	   "sZeroRecords":    "No se encontraron resultados",
	   "sEmptyTable":     "Ningún dato disponible en esta tabla",
	   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
	   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
	   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	   "sInfoPostFix":    "",
	   "sSearch":         "Buscar:",
	   "sUrl":            "",
	   "sInfoThousands":  ",",
	   "sLoadingRecords": "Cargando...",
	   "oPaginate": {
		   "sFirst":    "Primero",
		   "sLast":     "Último",
		   "sNext":     ">>",
		   "sPrevious": "<<"
	   },
	   "oAria": {
		   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	   }
	}
	} );

	$('#tablaArea').DataTable({
	responsive: {
	   details: {
		   type: 'column'
	   }
   },
   autoFill: true,

   columnDefs: [ {
	   className: 'control',
	   orderable: false,
	   targets:   0
   } ],
   order: [ 1, 'asc' ],
   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
   "ajax": {
	   "url": "Modelo/consultararea.php",
	   "type": "POST"
   },	
		   
   "columns": [
	   { "data": "control" },
	   { "data": "codigo" },
	   { "data": "sucursal" },
	   { "data": "nombre" },
	   { "data": "ubicacion" },
	   { "data": "estado"},
	   { "data": "boton"}
	   ],
   "language": {
	   "sProcessing":     "Procesando...",
	   "sLengthMenu":     "Mostrar _MENU_ registros",
	   "sZeroRecords":    "No se encontraron resultados",
	   "sEmptyTable":     "Ningún dato disponible en esta tabla",
	   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
	   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
	   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	   "sInfoPostFix":    "",
	   "sSearch":         "Buscar:",
	   "sUrl":            "",
	   "sInfoThousands":  ",",
	   "sLoadingRecords": "Cargando...",
	   "oPaginate": {
		   "sFirst":    "Primero",
		   "sLast":     "Último",
		   "sNext":     ">>",
		   "sPrevious": "<<"
	   },
	   "oAria": {
		   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	   }
	}
	} );
	$('#tablaPeticion').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarPeticion.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
	$('#tablaQueja').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarQueja.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
	$('#tablaReclamo').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarReclamo.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
	$('#tablaSugerencia').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarSugerencia.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
	$('#tablaFelicitacion').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarFelicitacion.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
	$('#tablaPQRS').DataTable({
		responsive: {
		   details: {
			   type: 'column'
		   }
	   },
	   autoFill: true,
	
	   columnDefs: [ {
		   className: 'control',
		   orderable: false,
		   targets:   0
	   } ],
	   order: [ 1, 'asc' ],
	   "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
	   "ajax": {
		   "url": "Modelo/consultarPqrs.php",
		   "type": "POST"
	   },	
			   
	   "columns": [
		   { "data": "control" },
		   { "data": "codigo" },
		   { "data": "tipo" },
		   { "data": "sucursal" },
		   { "data": "PQRS" },
		   { "data": "cliente" },
		   { "data": "fecha_registro" },
		   { "data": "estado"},
		   { "data": "boton"}
		   ],
	   "language": {
		   "sProcessing":     "Procesando...",
		   "sLengthMenu":     "Mostrar _MENU_ registros",
		   "sZeroRecords":    "No se encontraron resultados",
		   "sEmptyTable":     "Ningún dato disponible en esta tabla",
		   "sInfo":           "Mostrando del _START_ al _END_  de _TOTAL_ registros",
		   "sInfoEmpty":      "Mostrando del 0 al 0 de 0 registros",
		   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		   "sInfoPostFix":    "",
		   "sSearch":         "Buscar:",
		   "sUrl":            "",
		   "sInfoThousands":  ",",
		   "sLoadingRecords": "Cargando...",
		   "oPaginate": {
			   "sFirst":    "Primero",
			   "sLast":     "Último",
			   "sNext":     ">>",
			   "sPrevious": "<<"
		   },
		   "oAria": {
			   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		   }
		}
	} );
} );