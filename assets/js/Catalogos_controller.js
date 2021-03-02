$(document).ready(function() {
	$('#tabla_catalogo_productos').DataTable();
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
		$("#editar_producto_modal").modal("show");
	})
	$(".btn_borrar_producto").click(function(){
		if(confirm("estas seguro de que deseas borrar este producto?")){
			$.post('borrar_producto', {id_producto: $("#id_producto_edit").val()}, function(r) {
				location.reload();
			});
		}
	})
});