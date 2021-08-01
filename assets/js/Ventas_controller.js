$(document).ready(function() {
	$(".billete").keyup(function(){
		var valor = parseFloat($(this).val()*$(this).attr('multiplo')).toFixed(2);
		$(this).parent('div').next('div').find('input').val(valor);
		
		var total_pesos=0; $(".mxn").each(function(index, el) { total_pesos+= parseFloat($(el).val()); });
		var total_dlls=0; $(".dlls").each(function(index, el) { total_dlls+= parseFloat($(el).val()); });
		var total_total=parseFloat(total_pesos)+(parseFloat(total_dlls)*parseFloat($("#tipo_cambio").val()));
		console.log(total_pesos);
		$("#total_cajero").val(parseFloat(total_total).toFixed(2));
	})
	$(".billete").click(function(){ $(this).select(); })

	$("#finalizar_cierre").click(function(){
		console.log("cierre");
	})
});