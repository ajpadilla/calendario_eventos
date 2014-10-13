{{-- Validar datos y wizard para los estados --}}

{{
	"
		$('document').ready(function () {
			$.validator.setDefaults({
 				debug: true,
			});
	        
            $.validator.addMethod('lettersonly', function(value, element) {
               return this.optional(element) || /^[a-zA-ZñÑ/\s\W]+$/i.test(value);
            }, 'Solo letras, por favor.');		    
    
            
			$('#formWizard').validate({
                    rules:{
                    nombre:{
                            required:!0,
                            lettersonly:true,
                            remote: {
                                url:'" . URL::to('/verificarExistenciaNombreArticulacion/') ."',
                                type: 'POST',
                                data: {
                                    nombre: function() {
                                        return $('#nombre').val();
                                    }
                                },
                                dataFilter: function (data) {
                                    console.log(data);
                                    return data;
                                }
                        }   
                    }
                },
                messages:{
                    nombre:{
                        required:'Campo obligatorio',
                        remote: jQuery.validator.format('La articulación ya existe'),
                    },
                },
                
                invalidHandler:function(event, validator){
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        $('.alert-danger').show();
                    }else{
                        $('.alert-danger').hide();
                    }
                },
                highlight:function(element){
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight:function(element){
                    $(element).closest('.form-group').removeClass('has-error');
                },
                success:function(element){
                    element.addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
                }   
			});
		
			$('#registrar').click(function(){
				console.log($('#formWizard').valid());
				if($('#formWizard').valid() == true){
						$.ajax({
							type:'POST',
							url:'" . URL::to('/guardarArticulacion/') ."',
							data:{ nombre: $('#nombre').val()},
							dataType:'json',
							success : function(response) {
								console.log(response);
								$.fancybox({
									'content': '<h1>Articulación Agregada</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
								$('#formWizard').clearForm();
							},
							error : function(jqXHR, status, error) {
								alert('Disculpe, existió un problema');
								$.fancybox({
									'content': '<h1>Error al agregar el articulación</h1>',
									'autoScale' : true,
									'transitionIn' : 'none',
									'transitionOut' : 'none',
									'scrolling' : 'no',
									'type' : 'inline',
									'showCloseButton' : false,
									'hideOnOverlayClick' : false,
									'hideOnContentClick' : false
								});
								$('#formWizard').clearForm();
							},
						});
				}
			});	

			$('.borrar').click(function(){
				console.log('Borrar:');
			});
			
			$('.editar').click(function(){
				console.log('Editar');
			});
		
		});
	"
}}
