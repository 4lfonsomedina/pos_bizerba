$(document).ready(function() {
	

	$(".btn_alta_producto").click(function(){
		$("#alta_producto_modal").modal("show");
	})
	$(".btn_editar_producto").click(function(){
		$("#id_producto_edit").val($(this).attr('id_producto'));
		$("#plu_edit").val($(this).attr('plu'));
		$("#descripcion_edit").val($(this).attr('descripcion'));
		$("#um_edit").val($(this).attr('um'));
		$("#departamento_edit").val($(this).attr('departamento'));
		$("#precio_edit").val($(this).attr('precio'));
		$("#checkbox").attr('checked', true);
		$("#iva_edit").val($(this).attr('iva'));
		if($(this).attr('iva')=='1'){$("#iva_edit_check").attr('checked', true);}
		else{$("#iva_edit_check").attr('checked', false);}
		$("#editar_producto_modal").modal("show");
	})
	$(".btn_borrar_producto").click(function(){
		if(confirm("estas seguro de que deseas borrar este producto?")){
			$.post('borrar_producto', {id_producto: $("#id_producto_edit").val()}, function(r) {
				location.reload();
			});
		}
	})

	$(".btn_alta_departamento").click(function(){
		$("#alta_departamento_modal").modal("show");
	})
	$(".btn_editar_departamento").click(function(){
		$("#id_departamento_edit").val($(this).attr('id_departamento'));
		$("#departamento_edit").val($(this).attr('departamento'));
		$("#editar_departamento_modal").modal("show");
	})
	$(".btn_borrar_departamento").click(function(){
		if(confirm("estas seguro de que deseas borrar este departamento?")){
			$.post('borrar_departamento', {id_departamento: $("#id_departamento_edit").val()}, function(r) {
				location.reload();
			});
		}
	})

	$(".btn_alta_cajero").click(function(){
		$("#alta_cajero_modal").modal("show");
	})
	$(".btn_editar_cajero").click(function(){
		$("#id_usuario_edit").val($(this).attr('id_usuario'));
		$("#nombre_edit").val($(this).attr('nombre'));
		$("#usuario_edit").val($(this).attr('usuario'));
		$("#clave_edit").val($(this).attr('clave'));
		$("#editar_cajero_modal").modal("show");
	})
	$(".btn_borrar_cajero").click(function(){
		if(confirm("estas seguro de que deseas borrar este departamento?")){
			$.post('borrar_cajero', {id_usuario: $("#id_usuario_edit").val()}, function(r) {
				location.reload();
			});
		}
	})






	$('#tabla_catalogo').DataTable({
        language: {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sSearch":         "Buscar:",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    },
		    "buttons": {
		        "copy": "Copiar",
		        "colvis": "Visibilidad"
		    }
		}
    });



});