$('document').ready(function() {
	var evento_titulo = '{{ $evento->title }}';
	var porcentaje_hombres = parseInt('{{$porcentajes_sexo['hombres']}}');
	var porcentaje_mujeres = parseInt('{{$porcentajes_sexo['mujeres']}}');
	var porcentaje_estudiante = parseInt('{{$porcentaje_tipo['estudiante']}}');
	var porcentaje_directivo = parseInt('{{$porcentaje_tipo['directivo']}}');
	var porcentaje_docente = parseInt('{{$porcentaje_tipo['docente']}}');
	var porcentaje_administrativo = parseInt('{{$porcentaje_tipo['administrativo']}}');
	var porcentaje_obrero = parseInt('{{$porcentaje_tipo['obrero']}}');

	console.log('Hombres:'+porcentaje_hombres);
	console.log('Mujeres:'+porcentaje_mujeres);
	console.log('estudiantes:'+porcentaje_estudiante);
	console.log('directivos:'+porcentaje_directivo);
	console.log('docentes:'+porcentaje_docente);
	console.log('administrativos:'+porcentaje_administrativo);
	console.log('obreros:'+porcentaje_obrero);

	var pieData = [
		{
			value: porcentaje_hombres,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Hombres"
		},
		{
			value: porcentaje_mujeres,
			color: "#46BFBD",
			highlight: "#5AD3D1",
			label: "Mujeres"
		},
	];
	var pieData2 = [
				{
					value: porcentaje_estudiante,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Estudiantes"
				},
				{
					value: porcentaje_directivo,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Directivos"
				},
				{
					value: porcentaje_docente,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Docentes"
				},
				{
					value: porcentaje_administrativo,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Administrativos"
				},
				{
					value: porcentaje_obrero,
					color: "#4D5360",
					highlight: "#616774",
					label: "Obreros"
				}

			];		

		var pieOptions = {
			segmentShowStroke : false,
			animateScale : true
		}
		var ctx = document.getElementById('porcentaje_sexo').getContext('2d');
		new Chart(ctx).Pie(pieData, pieOptions);

		var ctx = document.getElementById('porcentaje_tipo_persona').getContext('2d');
		new Chart(ctx).Pie(pieData2, pieOptions);
});