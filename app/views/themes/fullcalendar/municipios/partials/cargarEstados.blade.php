{{ "
	$(function (){
	
		$.validator.setDefaults({
         	debug: true,
        });
 		
		$.validator.addMethod('lettersonly', function(value, element) {
			return this.optional(element) || /^[a-zA-ZñÑ/\s\W]+$/i.test(value);
		}, 'Solo letras, por favor.');
			
		 
        $('#formWizardMunicipio').validate({
        	rules:
        	{
            	nombre:
            	{
					required:!0,
					remote: 
					{
						type: 'POST',
						url:'" . URL::to('/verificarNombreMunicipio/') ."',
						data: {
                      		nombre :function(){
							 	return $('#nombre_municipio').val();
							},
							estado_id: function(){
								return $('#estados').val();
							}
                 		},
						dataType:'json',
						dataFilter: function (data)
						{
							console.log('verificar:'+data);
                            return data;
					    }
					}	
				},
				estados:{required:!0},
            },
			messages:
			{
				nombre:
				{
                    required:'Campo obligatorio',
					remote: jQuery.validator.format('El municipio ya se encuentra registrado para este estado'),
				},
                estados:{
                    required:'Campo obligatorio',
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
	
	 	$('#registrarMunicipio').click(function(){
			console.log($('#formWizardMunicipio').valid());
			 if($('#formWizardMunicipio').valid() == true){
				var datos = {
					nombre : $('#nombre_municipio').val(),
					estado_id : $('#estados').val(),
				}	
				$.ajax({
					type: 'POST',
					url:'" . URL::to('/guardarMunicipio/') ."',
					data: datos,
					dataType:'json',
					success: function(response) {
						console.log(response);
						$.fancybox({
							'content': '<h1>Municipio Agregado</h1>',
							'autoScale' : true,
							'transitionIn' : 'none',
							'transitionOut' : 'none',
							'scrolling' : 'no',
							'type' : 'inline',
							'showCloseButton' : false,
							'hideOnOverlayClick' : false,
							'hideOnContentClick' : false
						});
						$('#formWizardMunicipio').clearForm();
					},
					error : function(jqXHR, status, error) {
						$.fancybox({
							'content': '<h1>Error al enviar los datos del municipio</h1>',
							'autoScale' : true,
							'transitionIn' : 'none',
							'transitionOut' : 'none',
							'scrolling' : 'no',
							'type' : 'inline',
							'showCloseButton' : false,
							'hideOnOverlayClick' : false,
							'hideOnContentClick' : false
						});
						
						$('#formWizardMunicipio').clearForm();
					}
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
	});" 
}}
