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
				$.ajax({
					type:'POST',
					url:'" . URL::to('/guardarEstado/') ."',
					data:{ nombre: $('#nombreEstado').val()},
					dataType:'json',
					success : function(response) {
						console.log(response);
					},
					error : function(jqXHR, status, error) {
						alert('Disculpe, existió un problema');
					},
				});
			});	
		
		});
	"
}}
