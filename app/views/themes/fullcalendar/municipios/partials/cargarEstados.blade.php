{{ "
	$(function (){
		$.ajax({
			type: 'GET',
			url:'" . URL::to('/cargarEstados/') ."',
			dataType:'json',
			success: function(response) {
			if (response.success == true) {
			console.log(response.estados);
			$('#estados').html('');
				$('#estados').append('<option value=\"\">-- Seleccione --</option>');
				$.each(response.estados,function (k,v){
				$('#estados').append('<option value=\"'+k+'\">'+v+'</option>');
			});
			}else{
				$('#estados').html('');
				$('#estados').append('<option value=\"\">-- Seleccione --</option>');
			}
			}
		});
	});" 
}}
