{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
				
			$.validator.addMethod('lettersonly', function(value, element) {
				var reg = /^([a-z ñáéíóú]{2,60})$/i;
				return this.optional(element) || /^[a-zA-Z\u00e1\u00e9\u00ed\u00f3\u00fa\u00c1\u00c9\u00cd\u00d3\u00da\u00f1\u00d1\u00FC\u00DC]+$/.test(value);
			}, 'Solo letras, por favor.');
			
			$('#formWizardEstado').validate({
				rules:{
					nombre:{
							required:!0,
							lettersonly:true,
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
										return false;
									}else{
										return true;
									}
							}
						}	
					}
				},
				messages:{
					nombre:{
						remote: jQuery.validator.format('{0} is already taken'),
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
