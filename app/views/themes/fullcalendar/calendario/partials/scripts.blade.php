{{
	"
		$('document').ready(function() {
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

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				eventSources:[
				{
					url: 'cargar_eventos',
					type: 'GET',
					success: function(response) {
						//console.log(response);
					},
					error: function() {
						alert('there was an error while fetching events!');
					},
						color: 'blue',   // a non-ajax option
						textColor: 'blank' // a non-ajax option
				}

				],
				defaultDate: '2014-08-12',
				selectable: true,
				selectHelper: true,
				select: function(start, end) {
					$('#titulo').val();
                         $('#descripcion').val();
                         $('#hora').val();
                         $('#direccion').val();
                         $('#observacion').val();
                         $('#articulaciones').val();
                         $('#impactos').val();
                         $('#subsistemas').val();
                         $('#estados').val();
                         $('#municipios').val();

					$('.popup').css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'0%'}, 300);
					
					
					$('#registrar').click(function(){
						var eventData = {
							title : $('#titulo').val(),
							start : $.fullCalendar.moment(start).format()
						};
						var data ={
							title : $('#titulo').val(),
							descripcion : $('#descripcion').val(),
							start : $.fullCalendar.moment(start).format() +' '+$('#hora').val(),
							direccion : $('#direccion').val(),
							observacion : $('#observacion').val(),
							articulacion : $('#articulaciones').val(),
							impacto : $('#impactos').val(),
							subsistema : $('#subsistemas').val(),
							municipio : $('#municipios').val(),
						};

						//console.log($('#formEvent').valid());
						if($('#formEvent').valid() == 1){
							$.ajax({
									type:'POST',
									url:'" . URL::to('/eventos/') ."'+'/'+JSON.stringify(data),
									dataType:'json',
									success : function(response) {
										console.log(response);
										/*$.fancybox({
												'content': '<h1>Evento registrado</h1>',
												'autoScale' : true,
												'transitionIn' : 'none',
												'transitionOut' : 'none',
												'scrolling' : 'no',
												'type' : 'inline',
												'showCloseButton' : false,
												'hideOnOverlayClick' : false,
												'hideOnContentClick' : false
										});*/
										$('#formEvent').clearForm();
									},
									error : function(jqXHR, status, error) {
										$.fancybox({
												'content': '<h1>Error al registrar el evento</h1>',
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
							$('#calendar').fullCalendar('renderEvent',eventData);
							//$('#calendar').fullCalendar('refetchEvents');
                			$('.popup').css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'0%','display':'none'}, 300);
						}
						$('#calendar').fullCalendar('unselect');
					});				

					$('.exit').click(function(){
                		$('.popup').css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'0%','display':'none'}, 300);
              		});
				},
				editable: true,
				eventLimit: true,
				eventClick: function(event, element) {
					$('.popup').css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'0%'}, 300);
						var data;
						var hora;
						hora = $.fullCalendar.moment(event.start).format();
						console.log(hora.substring(11));
						$('#titulo').val(event.title);	
						$('#descripcion').val(event.descripcion);
						$('#hora').val(hora.substring(11));
						$('#direccion').val(event.direccion);
						$('#observacion').val(event.observacion);
						$('#articulaciones').val(event.articulacion.id);
						$('#impactos').val(event.impacto.id);
						$('#subsistemas').val(event.subsistema.id);
						$('#estados').val(event.estado.id);
						$('#municipios').val(event.municipio.id);
						console.log('Municipio:'+event.municipio.id);
					
						$('#registrar').click(function(){
												
							var data ={
									title : $('#titulo').val(),
									descripcion : $('#descripcion').val(),
									start : $.fullCalendar.moment(event.start).format(),
									direccion : $('#direccion').val(),
									observacion : $('#observacion').val(),
									articulacion : $('#articulaciones').val(),
									impacto : $('#impactos').val(),
									subsistema : $('#subsistemas').val(),
									municipio : $('#municipios').val(),
							};
		
							//console.log($('#formEvent').valid());
							if($('#formEvent').valid() == 1){
								$.ajax({
									type:'POST',
									url:'" . URL::to('/actualizarEvento/') ."'+'/'+event.id+'/'+JSON.stringify(data),
									dataType:'json',
									success : function(response) {
										console.log(response);
										/*$.fancybox({
											'content': '<h1>Evento actualizado</h1>',
											'autoScale' : true,
											'transitionIn' : 'none',
											'transitionOut' : 'none',
											'scrolling' : 'no',
											'type' : 'inline',
											'showCloseButton' : false,
											'hideOnOverlayClick' : false,
											'hideOnContentClick' : false
										});*/
									},
									error : function(jqXHR, status, error) {
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
								
								//$('#calendar').fullCalendar('refetchEvents');
								$('.popup').css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'0%','display':'none'}, 300);
							}
						});
						$('.exit').click(function(){
							$('.popup').css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'0%','display':'none'}, 300);
						});					
					},
					eventDrop: function(event, delta){
						console.log('id:'+ event.id +' '+'fecha:'+$.fullCalendar.moment(event.start).format());
						var data = {
							id:event.id,
							start:$.fullCalendar.moment(event.start).format()
						}
						$.ajax({
							type: 'POST',
							url:'" . URL::to('/updateStartEvent/') ."'+'/'+JSON.stringify(data),
							success: function(response) {
								console.log(response);
							},
							error : function(jqXHR, status, error) {
								console.log('Disculpe, existió un problema');
							},
						})
					}
				});
				
			});
 "
}}
