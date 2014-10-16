{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {
			
			$.validator.setDefaults({
				debug: true,
			});
			$('#cedula').inputmask({'mask':'99999?999999'})
		

		$('#wizForm').validate({
			doNotHideMessage:!0,
			errorClass:'error-span',
			errorElement:'span',
                   	rules:{
						   'evento_ids':{required:!0},
							nacionalidad:{required:!0},
							tipo:{required:!0},
							cedula:{
									required:!0,
									remote: {
       								url:'" . URL::to('/verificarEventoPersona/') ."',
        							type: 'POST',
        							data: {
          								cedula: function() {
											return $('#cedula').val();
         	 							}
        							},
									dataFilter: function (data) {
										console.log('respuesta:'+data);
                                        return data;
									}
      							}
							},

					},
					messages:{
                       'evento_ids':{
                            required:'Campo obligatorio',
                        },
                        nacionalidad:{
                            required:'Campo obligatorio',
                        },
						cedula:{
                            required:'Campo obligatorio',
							remote: jQuery.validator.format('La cedula no esta registrada'),
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
				$('#registrar').click(function(){
					console.log($('#wizForm').valid());
					if($('#wizForm').valid() == true)
					{	
						$.ajax({
								type:'POST',
								url:'" . URL::to('/invitarPersonaEvento/') ."',
								data:$('#wizForm').serialize(),
								dataType:'json',
								success : function(response) {
									console.log(response);
									$.fancybox({
										'content': '<h1>Persona Agregada</h1>',
										'autoScale' : true,
										'transitionIn' : 'none',
										'transitionOut' : 'none',
										'scrolling' : 'no',
										'type' : 'inline',
										'showCloseButton' : false,
										'hideOnOverlayClick' : false,
										'hideOnContentClick' : false
									});
									$('#wizForm').clearForm();
								},
								error : function(jqXHR, status, error) {
									//alert('Disculpe, existió un problema');
									$.fancybox({
										'content': '<h1>Error al agregar a la persona</h1>',
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
						});
					}
				});
		
						
			$.ajax({
				type: 'GET',
				url: '" . URL::to('/retornarEventos/') ."',
				dataType:'json',
				success: function(response) {
					console.log('eventos:'+JSON.stringify(response));
					if(response.success == true) {
						$('#eventos').html('');
						$('#eventos').append('<option value=\"\"></option>');
						$.each(response.eventos,function (k,v){
							$('#eventos').append('<option value=\"'+k+'\">'+v+'</option>');
						});
						}else{
							$('#eventos').html('');
							$('#eventos').append('<option value=\"\">-- Eventos --</option>');
						}
					},
					error : function(jqXHR, status, error) {
						console.log('Disculpe, existió un problema');
					},
				});

		});

	"
}}
