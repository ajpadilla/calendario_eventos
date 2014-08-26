$(document).ready(function() {
	$('#calendar').fullCalendar({
    	header: {
        	left: 'prev,next today',
       		center: 'titulo',
      		right: 'month,agendaWeek,agendaDay'
   		},
   		defaultDate: '2014-08-12',
      	selectable: true,
       	selectHelper: true,
		events: [
        {
        	titulo: 'All Day Event',
            start: '2014-08-01'
        }],
      	select: function(start, end) {
        	var titulo = prompt('Event Title:');
			/*var descripcion = prompt('Event Descripcion:');
			var hora = prompt('Event Hora:');
			var direccion = prompt('Event Direccion:');
			var observacion = prompt('Event Observacion:');
			var articulacion = prompt('Event Articulacion:');
			var impacto = prompt('Event Impacto:');
			var subsistema = prompt('Event subsistema:');
			var municipio = prompt('Event Municipio:');*/

            var eventData;
		    if (titulo) {
				eventData = {
               		titulo: titulo,
					/*descripcion: descripcion,
             	   	fecha: $.fullCalendar.moment(start).format()+' '+hora,
					direccion: direccion,
					observacion: observacion,
					articulacion: articulacion,
					impacto: impacto,
					subsistema:subsistema,
					municipio:municipio*/
           		};
				$.ajax({
                  	type: "POST",
                	url:'eventos/' + JSON.stringify(eventData),
                  	success: function(response) {
						console.log(response);
                  	},
					error : function(jqXHR, status, error) {
						console.log('Disculpe, existió un problema');
					},
              	});
               	$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
            }
			$('#calendar').fullCalendar('unselect');
      	},
        editable: true,
        eventLimit: true, // allow "more" link when too many events
		eventClick: function(event, element) {
        	event.titulo =  prompt('Event Title:');
        	$('#calendar').fullCalendar('updateEvent', event);
   		 }	
	});
});
