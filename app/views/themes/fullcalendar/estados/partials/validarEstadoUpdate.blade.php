{{-- Incliyendo plugin Validate --}}

{{
	"
		$(function (){
			var res;
			jQuery.validator.setDefaults({
  				debug: true
			});

			$('#formEstadoUpdate').validate({
				rules:{
					nombre:{
					required:true,	
				  }
				},
				messages:{
					nombre:{
						remote: jQuery.validator.format('{0} is already taken'),
					},
				},
			});
			
			$('#enviar').click(function() {
				console.log('Hola:'+$('#formEstadoUpdate').valid());
				console.log('id_estado:'+$('#id_estado').val());
				if($('#formEstadoUpdate').valid() == 1){
					$.ajax({
							type:'POST',
							url:'" . URL::to('/actualizarEstado/') ."'+'/'+$('#id_estado').val(),
							dataType:'json',
							data:$('#formEstadoUpdate').serialize(),
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Estado</h1>' + response.nombre +'<h1>Actualizado</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								}); 
							},
							error : function(jqXHR, status, error) {
								$.fancybox({
									'content':error,
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								}); 
							},
						});
					}
				});
			});
	"
}}
