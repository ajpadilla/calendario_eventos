{{--Pligins para el formulario de la dirccion--}}
{{
	"
	$('document').ready(function () {
	$('#registrar').click(function(){
					console.log($('#wizForm').valid());
						$.ajax({
								type:'POST',
								url:'" . URL::to('/actualizarUsuario/') ."'+'/'+$('#id').val(),
								data:$('#wizForm').serialize(),
								dataType:'json',
								success : function(response) {
									console.log(response);
									$.fancybox({
										'content': '<h1>Email actualizado</h1>',
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
									//alert('Disculpe, existió un problema');
									$.fancybox({
										'content': '<h1>Error al actualizar el email</h1>',
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
				});	

			});
	"
}}
