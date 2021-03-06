{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {
			
			$.validator.setDefaults({
				debug: true,
			});

			$('input[name=telefono]').inputmask({'mask':'99999999999'});
			$('#cedula').inputmask({'mask':'99999?999999'})
		
        $.validator.addMethod('lettersonly', function(value, element) {
         	  return this.optional(element) || /^[a-zA-ZñÑ/\s\W]+$/i.test(value);
            }, 'Solo letras, por favor.');	
	    		 
		$('#wizForm').validate({
			doNotHideMessage:!0,
			errorClass:'error-span',
			errorElement:'span',
                   	rules:{
						   'evento_ids[]':{required:!0},
                   			telefono:{required:!0},
                        	direccion:{required:!0,rangelength: [10, 256]},
                        	municipio:{required:!0},
							nacionalidad:{required:!0},
							cedula:{
									required:!0,
									remote: {
       								url:'" . URL::to('/existenciaCedula/') ."',
        							type: 'GET',
        							data: {
          								cedula: function() {
											return $('#cedula').val();
         	 							}
        							},
									dataFilter: function (data) {
										console.log('dataCedula:'+data);
                                        return data;
									}
      							}
							},
							nombres:{required:!0,lettersonly:true,rangelength: [1 , 45]},
							apellidos:{required:true,lettersonly:true,rangelength: [1 , 45]},
							sexo:{required:!0},
							email:{
									required:!0,
									email: true,
									remote:{
                                      url:'" . URL::to('/existenciaEmail/') ."',
                                      type: 'GET',
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
					},
					messages:{
                       'evento_ids[]':{
                            required:'Campo obligatorio',
                        },
                        tipo:{
                            required:'Campo obligatorio',
                        },
                        nacionalidad:{
                            required:'Campo obligatorio',
                        },
                        sexo :{
                            required:'Campo obligatorio',
                        },
                        direccion:{
                            required:'Campo obligatorio',
                            rangelength:'Por favor, introduzca un valor entre 10 y 256 caracteres.',
                        },
                         telefono:{
                            required:'Campo obligatorio',
                        },
                        email:{
                            required:'Campo obligatorio',
                        },
                        municipio:{
                            required:'Campo obligatorio',
                        },
                        nombres:{
                            required:'Campo obligatorio',
                            rangelength:'Por favor, introduzca un valor entre 1 y 45 caracteres.',
                        },
                         apellidos:{
                            required:'Campo obligatorio',
                            rangelength:'Por favor, introduzca un valor entre 1 y 45 caracteres.',
                        },
						cedula:{
                            required:'Campo obligatorio',
                            digits:'Solo digitos',
							remote: jQuery.validator.format('Cedula registrada'),
						},
						email: {
							remote: jQuery.validator.format('Email registrado'),
                            required:'Campo obligatorio',
                            email:'Ingrese un correo'
						}	
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
								url:'" . URL::to('/guardarPersona/') ."',
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
				
			$('#estados').click(function(){
				console.log('algo');
				console.log('estado:'+$('#estados').val());
				$.ajax({
					type: 'GET',
					url: '" . URL::to('/cargarMunicipios') ."'+'/'+$('#estados').val(),
					dataType:'json',
					success: function(response) {
						console.log('Municipios'+JSON.stringify(response));
						if(response.success == true) {
							$('#municipios').html('');
							$('#municipios').append('<option value=\"\">-- Municipio --</option>');
							$.each(response.municipios,function (k,v){
								$('#municipios').append('<option value=\"'+k+'\">'+v+'</option>');
							});
						}else{
							$('#municipios').html('');
							$('#municipios').append('<option value=\"\">-- Municipio --</option>');
						}
					},
					error : function(jqXHR, status, error) {
						console.log('Disculpe, existió un problema');
					},
				});
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
