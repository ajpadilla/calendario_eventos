{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
			
			$('#formWizardEstado').validate({
				rules:{
					nombre:{
							required:!0,
							remote: {
								url:'" . URL::to('/verificarExistenciaNombreEstado/') ."',
								type: 'post',
								data: {
									nombre: function() {
										return $('#nombreEstado').val();
									}
								},
								dataFilter: function (data) {
									console.log(data);
									var json = JSON.parse(data);
									if (json.msg == 'true') {
										return 'false';
									} else {
									return 'true';
								}
							}
						}	
					}
				},
				messages:{
					nombre:{
						remote: jQuery.validator.format('{0} is already taken'),
					},
				}	
			});
		
			$('#registrarEstado').click(function(){
				console.log($('#formWizardEstado').valid());
				if($('#formWizardEstado').valid() == true){
						$.ajax({
							type:'POST',
							url:'" . URL::to('/guardarEstado/') ."',
							data:{ nombre: $('#nombreEstado').val()},
							dataType:'json',
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Estado Agregado</h1>',
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
									'content': '<h1>Error al agregar el estado</h1>',
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
