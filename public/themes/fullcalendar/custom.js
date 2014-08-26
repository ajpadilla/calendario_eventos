$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2014-08-12',
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Titulo del evento:');
				var descripcion = prompt('Descripcion');
				var hora = prompt('Hora');		
				var direccion= prompt('Direccion');
				var observacion = prompt('Observacion');
				var articulacion = prompt('Articulacion');
				var impacto = prompt('Impacto');
				var subsistema = prompt('Subsistema');
				var municipio = prompt('Municipio');

				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					
					data = {
						titulo:title,	
						descripcion:descripcion,
						fecha: $.fullCalendar.moment(start).format()+' '+hora,
						direccion: direccion,
						observacion: observacion,
						articulacion: articulacion,
						impacto: impacto,
						subsistema: subsistema,
						municipio: municipio
					};		
					console.log("consola:" + data);
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					
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
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2014-08-01'
				},
			],
			eventClick: function(event, element) {
				event.title = prompt('Nuevo Title:');
				$('#calendar').fullCalendar('updateEvent', event);
			}
		});
		
	});

