{{ "
	$(function (){
	
		$.validator.setDefaults({
         	debug: true,
        });
  
        $('#formWizardMunicipio').validate({
        	rules:{
            	nombre:{required:!0},
				estados:{required:!0},
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

		$('#estados').click(function(){
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
		});
	});" 
}}
