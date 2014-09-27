{{
	"
$('document').ready(function() {

	 var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

	console.log('date:'+ date);

	$('#calendar').fullCalendar({
		lang: 'es',
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
		//defaultDate: '2014-08-12',
		gotoDate : date,
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
			
		},
		editable: true,
		eventLimit: true,
		eventClick: function(event, element) {
			$('.popup').css({'display':'block', 'opacity':'0'}).animate({'opacity':'1','top':'50%'}, 300);
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
