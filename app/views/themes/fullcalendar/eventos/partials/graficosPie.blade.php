var data = [
    { label: "IE",  data: 19.5, color: "#4572A7"},
    { label: "Safari",  data: 4.5, color: "#80699B"},
    { label: "Firefox",  data: 36.6, color: "#AA4643"},
    { label: "Opera",  data: 2.3, color: "#3D96AE"},
    { label: "Chrome",  data: 36.3, color: "#89A54E"},
    { label: "Other",  data: 0.8, color: "#3D96AE"}
];
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
		{ label: "Hombres",  data: porcentaje_hombres, color: "#4572A7"},
	    { label: "Mujeres",  data: porcentaje_mujeres, color: "#80699B"},
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

		 $.plot($("#placeholder"), pieData, {
          series: {
        pie: {
            show: true,
            radius: 1,
            label: {
                show: true,
                radius: 1,
                formatter: function(label, series) {
                    return '<div style="font-size:11px; text-align:center; padding:2px; color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';
                },
                background: {
                    opacity: 0.8
                }
            }
        }
    },
    legend: {
        show: false
    }
    });

});