$(document).ready(function() {
	$(".check_input").change(function(){
		if($(this).is(':checked')){ $(this).next('input').val('1');}
		else{ $(this).next('input').val('0'); }
	})
});