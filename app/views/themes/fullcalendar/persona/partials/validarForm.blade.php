{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {
			
			$.validator.setDefaults({
				debug: true,
			});

			$('input[name=telefono]').inputmask({'mask':'9999-9999999'});
			
			 $.validator.addMethod('alpha', 
                              function(value, element) {
                                  return  /^[a-zA-Z]*$/.test(value);
                              }, 
                              'Alpha Characters Only.'
       		);

			$('#wizForm').validate({
			doNotHideMessage:!0,
			errorClass:'error-span',
			errorElement:'span',
                   	rules:{
                    		numero:{required:!0},
                   			telefono:{required:!0},
                        	ubicacion:{required:!0,rangelength: [10, 256]},
                        	municipio:{required:!0},
							nacionalidad:{required:!0},
							cedula:{
									required:!0,
									digits:true,
									rangelength: [5, 10],
									remote: {
       								url:'" . URL::to('/existenciaCedula/') ."',
        							type: 'post',
        							data: {
          								cedula: function() {
											return $('#cedula').val();
         	 							}
        							},
									dataFilter: function (data) {
										console.log(data);
										var json = JSON.parse(data);
        								if (json.msg == 'true') {
            								return 'false';
       	 								} else {
            								return 'true';
        								}
        							}
      							}
							},
							nombre:{required:!0,alpha: true,rangelength: [1 , 45]},
							apellido:{required:!0,alpha: true,rangelength: [1 , 45]},
							sexo:{required:!0},
							email:{
									required:!0,
									email: true,
									remote:{
                                      url:'" . URL::to('/existenciaEmail/') ."',
                                      type: 'post',
                                      data: {
                                     	email: function() {
                                        	return $('#email').val();
                                          }
                                      },
                                      dataFilter: function (data) {
                                          console.log(data);
                                          var json = JSON.parse(data);
                                          if (json.msg == 'true') {
                                              return 'false';
                                          } else {
                                              return 'true';
                                          }
                                      }
                                  }
							},
					},
					messages:{
						cedula:{
							remote: jQuery.validator.format('{0} is already taken'),
						},
						email: {
							remote: jQuery.validator.format('{0} is already taken'),
						}	
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
					console.log($('#wizForm').valid());
				});
		});
	"
}}
