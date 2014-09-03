{{-- Incliyendo plugin AjaxForm --}}

{{
	"
		$(function (){
			jQuery.validator.setDefaults({
  				debug: true
			});

			$('#formEstado').validate({
				rules:{
					nombre:{required:true},
				},
			});
			$('#enviar').click(function() {
				console.log('Hola');
    			alert($('#formEstado').valid());
			});
		});
	"
}}
