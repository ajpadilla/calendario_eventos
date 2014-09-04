{{-- Incliyendo plugin AjaxForm --}}

{{
	"
		$(function (){
			var res;
			jQuery.validator.setDefaults({
  				debug: true
			});

			$('#formEstado').validate({
				rules:{
					nombre:{
					required:true,	
					remote: {
						url:'" . URL::to('/verificarExistenciaNombreEstado/') ."',
						type: 'post',
						data: 
						{
							nombre: function() 
							{
								return $('#nombre').val();
							}
						},
						dataFilter: function (data) {
							console.log('respuesta:'+data);
							var json = JSON.parse(data);
							res = json.msg;
							if (json.msg == 'true') {
								return 'false';
							} else {
								return 'true';
							}
						}
					}
				  }
				},
				messages:{
					nombre:{
						remote: jQuery.validator.format('{0} is already taken'),
					},
				},
			});
			
			$('#enviar').click(function() {
				console.log('Hola');
				if($('#formEstado').valid() == 1){
					$.ajax({
							type:'POST',
							url:'" . URL::to('/guardarEstado/') ."',
							data:$('#formEstado').serialize(),
							dataType:'json',
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Estado</h1>' + response.nombre +'<h1>Agregado</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								}); 
								$('#formEstado').clearForm();
							},
							error : function(jqXHR, status, error) {
								alert('Disculpe, existió un problema');
								$.fancybox({
									'content': '<h1>Error al enviar los datos al servidor</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								}); 
								$('#formEstado').clearForm();
							},
						});
					}
				});
			});
	"
}}
