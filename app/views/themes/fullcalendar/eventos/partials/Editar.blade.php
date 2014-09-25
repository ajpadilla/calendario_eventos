{{
	"
		$('document').ready(function() {
			
			$('#fecha_hora').datetimepicker({
    			format: 'y-m-d H:m',
			});

			$.validator.setDefaults({
				debug: true,
			});

		$('#hora').inputmask({'mask':'99:99:99'});
		$.validator.addMethod('alpha',
			function(value, element) {
				return /^[a-zA-Z]*$/.test(value);
			}, 'Alpha Characters Only.'
		);

		$('#formEvent').validate({
			rules:{
				fecha_hora:{required:!0,date: true},
				titulo:{required:!0,rangelength: [3 , 45]},
				descripcion:{required:!0,},
				hora:{required:!0},
				direccion:{required:!0},
				observacion:{required:!0},
				articulaciones:{required:!0},
				impactos:{required:!0},
				subsistemas:{required:!0},
				municipios:{required:!0},
			},
			messages:{
				'fecha_hora':{
					required:'Campo obligatorio',
				},
				'titulo':{
					required:'Campo obligatorio',
				},
				descripcion:{
					required:'Campo obligatorio',
				},
				hora:{
					required:'Campo obligatorio',
				},
				direccion :{
					required:'Campo obligatorio',
				},
				observacion:{
					required:'Campo obligatorio',
				},
				articulaciones:{
					required:'Campo obligatorio',
				},
				impactos:{
					required:'Campo obligatorio',
				},
				municipios:{
					required:'Campo obligatorio',
				},
				subsistemas:{
					required:'Campo obligatorio',
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
	
	$('#estados').click(function(){
		//console.log('algo');
		//console.log('estado:'+$('#estados').val());
		$.ajax({
			type: 'GET',
			url:'" . URL::to('/cargarMunicipios/') ."'+'/'+$('#estados').val(),
			dataType:'json',
			success: function(response) {
									//console.log('Municipios'+JSON.stringify(response));
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

	$('#registrar').click(function(){
		console.log($('#formEvent').valid());
		if($('#formEvent').valid() == 1){
			//console.log($('#formEvent').valid());
			$.ajax({
								type:'POST',
								url:'" . URL::to('/actualizarEvento/') ."'+'/'+$('#id').val(),
								data:$('#formEvent').serialize(),
								dataType:'json',
								success : function(response) {
									console.log(response);
									$.fancybox({
										'content': '<h1>Evento Actualizado</h1>',
										'autoScale' : true,
										'transitionIn' : 'none',
										'transitionOut' : 'none',
										'scrolling' : 'no',
										'type' : 'inline',
										'showCloseButton' : false,
										'hideOnOverlayClick' : false,
										'hideOnContentClick' : false
									});
									$('#formEvent').clearForm();
								},
								error : function(jqXHR, status, error) {
									//alert('Disculpe, existió un problema');
									$.fancybox({
										'content': '<h1>Error al actualizar el evento</h1>',
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
