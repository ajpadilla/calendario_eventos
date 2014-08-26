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
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					
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

