$(document).ready(function() {
	
	$.validator.addMethod('alpha',
		function(value, element) {
			return /^[a-zA-Z]*$/.test(value);
			}, 'Alpha Characters Only.'
	);
	
	$('#formEstado').validate({
		rules:{
				nombre:{required:!0,alpha: true,rangelength: [3 , 45]},
		},
		submitHandler: function(form) {
        	form.submit();
			alert("Datos Enviados!");
        }
	});
	
	$('#formMunicipios').validate({
    	rules:{ 
        	nombre:{required:!0,alpha: true,rangelength: [3 , 45]},
			estado:{required:!0},
        },
     	submitHandler: function(form) {
        	form.submit();
        	alert("Datos Enviados!");
        }
     });
	
			$.ajax({
				type: 'GET',
				url: 'cargarEstados',
				dataType:'json',
				success: function(response){
					console.log(response.estados);
					if(response.success == true) {
						$('#estados').html('');
						$('#estados').append('<option value=\"\">-- Seleccione --</option>');
						$.each(response.estados,function (k,v){
						$('#estados').append('<option value=\"'+k+'\">'+v+'</option>');
					});
					}else{
						$('#estados').html('');
						$('#estados').append('<option value=\"\">-- Seleccione --</option>');
					}
				},
				error:function(jqXHR, status, error) {
                	console.log('Disculpe, existió un problema');
               	},
			});
		$('#estados').click(function(){
			console.log('estado:'+$('#estados').val());
			$.ajax({
				type: "GET",
				url:'cargarMunicipios/'+$('#estados').val(),
				dataType:'json',
				success: function(response) {
					console.log('Municipios'+JSON.stringify(response));
					if(response.success == true) {
                          $('#municipios').html('');
                          $('#municipios').append('<option value=\"\">-- Seleccione --</option>');
                          $.each(response.municipios,function (k,v){
                          	$('#municipios').append('<option value=\"'+k+'\">'+v+'</option>');
                      	}); 
                      }else{
                          $('#estados').html('');
                          $('#estados').append('<option value=\"\">-- Seleccione --</option>');
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
			eventSources: [
        			{
            			url: 'cargar_eventos',
            			type: 'GET',
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
				  $(".popup").css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'45%'}, 300);
				  $(".submitForm").click(function(){
                	var title = $(".title").val();
					console.log(title);
				});
				$(".exit").click(function(){
                	$(".popup").css({'display':'block', 'opacity':'1'}).animate({'opacity':'0','top':'55%','display':'none'}, 300);
              	});
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			eventClick: function(event, element) {
				event.title = prompt('Nuevo Title:');
				$('#calendar').fullCalendar('updateEvent', event);
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

