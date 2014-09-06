{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {
			
			$.validator.setDefaults({
				debug: true,
			});

			$('input[name=telefono]').inputmask({'mask':'99999999999'});
			
			 $.validator.addMethod('alpha', 
                              function(value, element) {
                                  return  /^[a-zA-Z]*$/.test(value);
                              }, 
                              'Alpha Characters Only.'
       		);

		$('#wizForm').validate({
			doNotHideMessage:!0,
			errorClass:'error-span',
			errorElement:'span',
                   	rules:{
                    		numero:{required:!0},
                   			telefono:{required:!0},
                        	direccion:{required:!0,rangelength: [10, 256]},
                        	municipio:{required:!0},
							nacionalidad:{required:!0},
							cedula:{
									required:!0,
									digits:true,
									rangelength: [5, 10],
									remote: {
       								url:'" . URL::to('/existenciaCedula/') ."',
        							type: 'post',
        							data: {
          								cedula: function() {
											return $('#cedula').val();
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
							},
							nombres:{required:!0,alpha: true,rangelength: [1 , 45]},
							apellidos:{required:!0,alpha: true,rangelength: [1 , 45]},
							sexo:{required:!0},
							email:{
									required:!0,
									email: true,
									remote:{
                                      url:'" . URL::to('/existenciaEmail/') ."',
                                      type: 'post',
                                      data: {
                                     	email: function() {
                                        	return $('#email').val();
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
							},
					},
					messages:{
						cedula:{
							remote: jQuery.validator.format('{0} is already taken'),
						},
						email: {
							remote: jQuery.validator.format('{0} is already taken'),
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
									$('#formWizardEstado').clearForm();
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
									$('#formWizardEstado').clearForm();
								},
						});
					}
				});
				
				$.ajax({
					type: 'GET',
					url:'" . URL::to('/cargarEstados/') ."',
					dataType:'json',
					success: function(response) {
						if (response.success == true) {
							//console.log(response.estados);
							$('#estados').html('');
							$('#estados').append('<option value=\"\">-- Seleccione --</option>');
							$.each(response.estados,function (k,v){
								$('#estados').append('<option value=\"'+k+'\">'+v+'</option>');
							});
						}else{
							$('#estados').html('');
							$('#estados').append('<option value=\"\">-- Seleccione --</option>');
						}
					}
				});
			$('#estados').click(function(){
				console.log('algo');
				console.log('estado:'+$('#estado').val());
				$.ajax({
					type: 'GET',
					url: '" . URL::to('/cargarMunicipios') ."'+'/'+$('#estados').val(),
					dataType:'json',
					success: function(response) {
						console.log('Municipios'+JSON.stringify(response));
						if(response.success == true) {
							$('#municipio').html('');
							$('#municipio').append('<option value=\"\">-- Municipio --</option>');
							$.each(response.municipios,function (k,v){
								$('#municipio').append('<option value=\"'+k+'\">'+v+'</option>');
							});
						}else{
							$('#municipio').html('');
							$('#municipio').append('<option value=\"\">-- Municipio --</option>');
						}
					},
					error : function(jqXHR, status, error) {
						console.log('Disculpe, existió un problema');
					},
				});
			});			
	
	

		});
	"
}}
