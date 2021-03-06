{{
	"
		$('document').ready(function() {
			var date = new Date();

			$('#fecha_hora').datetimepicker({
				lang:'es',
				minDate:date,
    			format: 'y-m-d H:i',
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
				fecha_hora:{required:!0,},
				'responsables[]':{required:!0},
				actividad:{required:!0},
				estatus:{required:!0},
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
				'responsables[]':{
					required:'Campo obligatorio'
				},
				'actividad':{
					required:'Campo obligatorio'
				},
				estatus:{required:'Campo obligatorio'},
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



		$.ajax({
			type: 'GET',
			url:'" . URL::to('/cargarEstados/') ."',
			dataType:'json',
			success: function(response){
								//console.log(response.estados);
				if(response.success == true) {
					$('#estados').html('');
					$('#estados').append('<option value=\"\">-- Estado --</option>');
					$.each(response.estados,function (k,v){
						$('#estados').append('<option value=\"'+k+'\">'+v+'</option>');
					});
				}else{
					$('#estados').html('');
					$('#estados').append('<option value=\"\">-- Estado --</option>');
				}
			},
			error:function(jqXHR, status, error) {
				console.log('Disculpe, existió un problema');
			},
		});

		$.ajax({
			type: 'GET',
			url:'" . URL::to('/retornarArticulaciones/') ."',
			dataType:'json',
			success: function(response) {
				//console.log('Arti:'+response);
				if (response.success == true) {
					$('#articulaciones').html('');
					$('#articulaciones').append('<option value=\"\">-- Articulación --</option>');
					$.each(response.articulaciones,function (k,v){
						$('#articulaciones').append('<option value=\"'+k+'\">'+v+'</option>');
					});
			}else{
				$('#articulaciones').html('');
				$('#articulaciones').append('<option value=\"\">-- Articulación --</option>');
			}
		},
		error : function(jqXHR, status, error) {
			console.log('Disculpe, existió un problema');
		},
	});

	$.ajax({
			type: 'GET',
			url:'" . URL::to('/listaResponsables/') ."',
			dataType:'json',
			success: function(response) {
				//console.log('Arti:'+response);
				if (response.success == true) {
					$('#responsables').html('');
					$('#responsables').append('<option value=\"\">-- Responsables --</option>');
					$.each(response.responsables,function (k,v){
						$('#responsables').append('<option value=\"'+k+'\">'+v+'</option>');
					});
			}else{
				$('#responsables').html('');
				$('#responsables').append('<option value=\"\">-- Articulación --</option>');
			}
		},
		error : function(jqXHR, status, error) {
			console.log('Disculpe, existió un problema');
		},
	});

	$.ajax({
		type: 'GET',
		url:'" . URL::to('/retornarImpactos/') ."',
		dataType:'json',
		success: function(response) {
							//console.log('impacto:'+response);
			if (response.success == true) {
				$('#impactos').html('');
				$('#impactos').append('<option value=\"\">-- Impacto --</option>');
				$.each(response.impactos,function (k,v){
					$('#impactos').append('<option value=\"'+k+'\">'+v+'</option>');
				});
			}else{
				$('#impactos').html('');
				$('#impactos').append('<option value=\"\">-- Impacto --</option>');
			}
		},
		error : function(jqXHR, status, error) {
			console.log('Disculpe, existió un problema');
		},
	});

	$.ajax({
		type: 'GET',
		url:'" . URL::to('/retornarSubsistemas/') ."',	
		dataType:'json',
		success: function(response) {
			if (response.success == true) {
				$('#subsistemas').html('');
				$('#subsistemas').append('<option value=\"\">-- Subsistema --</option>');
				$.each(response.subsistemas,function (k,v){
					$('#subsistemas').append('<option value=\"'+k+'\">'+v+'</option>');
				});
			}else{
				$('#subsistemas').html('');
				$('#subsistemas').append('<option value=\"\">-- Subsistema --</option>');
			}
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
								url:'" . URL::to('/guardarEvento/') ."',
								data:$('#formEvent').serialize(),
								dataType:'json',
								success : function(response) {
									console.log(response);
									$.fancybox({
										'content': '<h1>Evento Agregado</h1>',
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
										'content': '<h1>Error al agregar el evento</h1>',
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
