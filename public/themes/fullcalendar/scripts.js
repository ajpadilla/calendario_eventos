$(document).ready(function() {
	
	$('#hora').inputmask({'mask':'99:99:99'});
	$.validator.addMethod('alpha',
		function(value, element) {
			return /^[a-zA-Z]*$/.test(value);
			}, 'Alpha Characters Only.'
	);
	
	$('#crear_evento').validate({
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
		submitHandler: function(form) {
			form.submit();
		}
	});
	$.ajax({
		type: 'GET',
		url: 'cargarEstados',
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
	
	$('#estados').click(function(){
		//console.log('estado:'+$('#estados').val());
		$.ajax({
			type: "GET",
			url:'cargarMunicipios/'+$('#estados').val(),
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
                          $('#estados').html('');
                          $('#estados').append('<option value=\"\">-- Municipio --</option>');
                      } 
				},
				error : function(jqXHR, status, error) {
					console.log('Disculpe, existió un problema');
				},
			});

		});
		
	$.ajax({
		type: "GET",
		url:'retornarArticulaciones',
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
   		type: "GET",
        url:'retornarImpactos',
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
			url: 'retornarSubsistemas',
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
            	console.log(response);
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
			var eventData;
			var data;
				

			$(".popup").css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'45%'}, 300);
			
			$(".submitForm").click(function(){
		
				var title = $('#titulo').val();
				var descripcion = $('#descripcion').val();
				var hora = $('#hora').val();	
				var direccion= $('#direccion').val();
				var observacion = $('#observacion').val();
				var articulacion = $('#articulaciones').val();
				var impacto = $('#impactos').val();
				var subsistema = $('#subsistemas').val();
				var municipio = $('#municipios').val();
				
				if (title) {
					eventData = {
						title: title,
						start: start,
					}
				};
			
				data = {
					title: title,	
					descripcion: descripcion,
					start: $.fullCalendar.moment(start).format()+' '+hora,
					direccion: direccion,
					observacion: observacion,
					articulacion: articulacion,
					impacto: impacto,
					subsistema: subsistema,
					municipio: municipio
				};
				console.log("consola:" + JSON.stringify(data));		
				if($('#crear_evento').valid() == 1){
					$('#calendar').fullCalendar('renderEvent', eventData, true);
					$.ajax({
						type: "POST",
						url:'eventos/' + JSON.stringify(data),
						success: function(response) {
							console.log(response);
						},
						error : function(jqXHR, status, error) {
							console.log('Disculpe, existió un problema');
						},
					});
				};
				$('#calendar').fullCalendar('unselect');
			});

			$(".exit").click(function(){
            	$(".popup").css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'55%','display':'none'}, 300);
            });
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			eventClick: function(event, element) {
				var data;
				var hora;
				$(".popup").css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'45%'}, 300);
				hora = $.fullCalendar.moment(event.start).format();
				console.log(hora.substring(11));
				$('#titulo').val(event.title);	
				$('#descripcion').val(event.descripcion);
				$('#hora').val(hora.substring(11));
				$('#direccion').val(event.direccion);
				$('#observacion').val(event.observacion);
				$('#articulaciones').val(event.articulacion_id);
				$('#impactos').val(event.impacto_id);
				$('#subsistemas').val(event.subsistema_id);
				$('#estados').val(event.municipio_id);
				$('#municipios').val(event.municipio_id);
				$(".exit").click(function(){
                	$(".popup").css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'55%','display':'none'}, 300);
           	 	});

			},
			eventDrop: function(event, delta){
				console.log('id:'+ event.id +' '+'fecha:'+$.fullCalendar.moment(event.start).format());
				var data = {
					id:event.id,
					start:$.fullCalendar.moment(event.start).format()
				}
				$.ajax({
					type: "POST",
					url:'updateStartEvent/' + JSON.stringify(data),
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

