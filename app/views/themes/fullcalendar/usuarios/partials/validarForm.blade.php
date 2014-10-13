{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {
			
			$.validator.setDefaults({
				debug: true,
			});	
	    		 
		$('#wizForm').validate({
			doNotHideMessage:!0,
			errorClass:'error-span',
			errorElement:'span',
                   	rules:{
							nombre:{
									required:!0,
									minlength:3,
									remote: {
       								url:'" . URL::to('/verificarNombreUsuario/') ."',
        							type: 'POST',
        							data: {
          								nombre: function() {
											return $('#nombre').val();
         	 							}
        							},
									dataFilter: function (data) {
										console.log('datanombre:'+data);
                                        return data;
									}
      							}
							},
							email:{
									required:!0,
									email: true,
									remote:{
                                      url:'" . URL::to('/verificarEmailUsuario/') ."',
                                      type: 'POST',
                                      data: {
                                     	email: function() {
                                        	return $('#email').val();
                                          }
                                      },
                                      dataFilter: function (data) {
                                          console.log('dataEmail:'+data);
                                          return data;
                                      }
                                  }
							},
							clave:{
								required:!0,
								minlength:6,
							}
					},
					messages:{
                    
                        email:{
                            required:'Campo obligatorio',
                            email:'Ingrese un correo valido',
                             remote:'El Email ya se encuentre registrado'
                        },

                        nombre:{
                            required:'Campo obligatorio',
                            minlength:'Por favor, introduzca un valor entre 3 y 45 caracteres.',
                            remote:'El nombre de usuario ya se encuentra en uso'
                        },

						clave:{
                            required:'Campo obligatorio',
                            minlength:'Minimo 6 caracteres',
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
								url:'" . URL::to('/agregarUsuario/') ."',
								data:$('#wizForm').serialize(),
								dataType:'json',
								success : function(response) {
									console.log(response);
									$.fancybox({
										'content': '<h1>Usuario Agregado</h1>',
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
										'content': '<h1>Error al agregar a la usuario</h1>',
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

		});

	"
}}
