{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
				
			$.validator.addMethod('lettersonly', function(value, element) {
				return this.optional(element) || /^[a-zA-ZñÑ/\s\W]+$/i.test(value);
			}, 'Solo letras, por favor.');
			
			$('#formWizardEstado').validate({
				rules:{
					nombre:{
							required:!0,
							lettersonly:true,
							remote: {
								url:'" . URL::to('/verificarExistenciaNombreEstado/') ."',
								type: 'POST',
								data: {
									nombre: function() {
										return $('#nombreEstado').val();
									}
								},
								dataFilter: function (data) {
									console.log('data:'+ data);
                                    return data;
								}
						}	
					}
				},
				messages:{
					nombre:{
                        required:'Campo Obligatorio',
						remote: jQuery.validator.format('El estado ya existe'),
					},
				},
				invalidHandler:function(event, validator){
					var errors = validator.numberOfInvalids();
					if (errors) {
						$('.alert-danger').show();
					}else{
						$('.alert-danger').hide();
					}
				},
				highlight:function(element){
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				unhighlight:function(element){
					$(element).closest('.form-group').removeClass('has-error');
				},
				success:function(element){
					element.addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
				}	
			});
		
			$('#registrarEstado').click(function(){
				console.log('validate:'+$('#formWizardEstado').valid());
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
						})
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
