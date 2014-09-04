{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
			
			$('#formWizardEstado').validate({
				rules:{
					nombre:{required:!0},
				}
			});
		
			$('#registrarEstado').click(function(){
				console.log($('#formWizardEstado').valid());
			});	
		
		});
	"
}}
