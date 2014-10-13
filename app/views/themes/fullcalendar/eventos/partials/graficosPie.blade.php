
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
		{ label: "Estudiantes",  data: porcentaje_estudiante, color: "#4572A7"},
	    { label: "Directivos",  data: porcentaje_directivo, color: "#80699B"},
	    { label: "Docentes",  data: porcentaje_docente, color: "#FF0000"},
	    { label: "Administrativo",  data: porcentaje_administrativo, color: "#00FF00"},
	    { label: "Obreros",  data: porcentaje_obrero, color: "#C0C0C0"},   
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


	$.plot($("#placeholder2"), pieData2, {
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