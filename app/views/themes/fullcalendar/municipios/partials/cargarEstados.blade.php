{{ "
	$(function (){
	
		$.validator.setDefaults({
         	debug: true,
        });
 		
		$.validator.addMethod('lettersonly', function(value, element) {
			var reg = /^([a-z ñáéíóú]{2,60})$/i;
			return this.optional(element) || /^[a-zA-Z\u00e1\u00e9\u00ed\u00f3\u00fa\u00c1\u00c9\u00cd\u00d3\u00da\u00f1\u00d1\u00FC\u00DC]+$/.test(value);
		}, 'Solo letras, por favor.');
			
		 
        $('#formWizardMunicipio').validate({
        	rules:{
            	nombre:{
					required:!0,
					remote: {
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
						dataFilter: function (data) {
							console.log('data:'+data);
                            return data;
					    }
					}	
				},
				estados:{required:!0},
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
	
	 	$('#registrarMunicipio').click(function(){
			console.log($('#formWizardMunicipio').valid());
			 /*if($('#formWizardMunicipio').valid() == true){
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
			}*/
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
