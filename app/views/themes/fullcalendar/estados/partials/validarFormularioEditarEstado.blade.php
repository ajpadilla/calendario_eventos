{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
			
			$('#formWizardEstado').validate({
				rules:{
					nombre:{required:!0,}
				},
		});
		
			$('#registrarEstado').click(function(){
				console.log($('#formWizardEstado').valid());
				if($('#formWizardEstado').valid() == true){
						$.ajax({
							type:'POST',
							url:'" . URL::to('/actualizarEstado/') ."'+'/'+$('#id').val(),
							dataType:'json',
							data:{ nombre: $('#nombreEstado').val()},
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Estado Actualizado</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
								$('#formWizardEstado').clearForm();
							},
							error : function(jqXHR, status, error) {
								alert('Disculpe, existió un problema');
								$.fancybox({
									'content': '<h1>Error al actualizar el estado</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
								$('#formWizardEstado').clearForm();
							},
						});
				}
			});	

			$('.borrarEstado').click(function(){
				console.log('Borrar:');
			});
			
			$('.editarEstado').click(function(){
				console.log('Editar');
			});
		
		});
	"
}}
