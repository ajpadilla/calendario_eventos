$('document').ready(function() {
	var date = new Date();
	$('#fecha_inicio').datetimepicker({
		lang:'es',
		//minDate:date,
    	format: 'Y-m-d',
	});

	$('#fecha_final').datetimepicker({
		lang:'es',
		//minDate:date,
    	format: 'Y-m-d',
	});
});
