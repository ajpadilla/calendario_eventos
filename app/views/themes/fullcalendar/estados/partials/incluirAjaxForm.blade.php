{{-- Incliyendo plugin AjaxForm --}}

{{
	"
		$(function (){
			jQuery.validator.setDefaults({
  				debug: true
			});

			$('#formEstado').validate({
				rules:{
					nombre:{required:true},
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
