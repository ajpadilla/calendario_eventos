{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
			
			$('#formWizard').validate({
				rules:{
					nombre:{required:!0},
				}
			});
		
			$('#registrar').click(function(){
				console.log($('#formWizard').valid());
				if($('#formWizard').valid() == true){
						$.ajax({
							type:'POST',
							url:'" . URL::to('/actualizarSubsistema/') ."'+'/'+$('#id').val(),
							data:{ nombre: $('#nombre').val()},
							dataType:'json',
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Subsistema Actualizado</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
							},
							error : function(jqXHR, status, error) {
								alert('Disculpe, existió un problema');
								$.fancybox({
									'content': '<h1>Error al actualizar el subsistema</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
							}
						});
				}
			});	

			$('.borrar').click(function(){
				console.log('Borrar:');
			});
			
			$('.editar').click(function(){
				console.log('Editar');
			});
		
		});
	"
}}
