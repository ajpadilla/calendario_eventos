{{--Pligins para el formulario de la dirccion--}}
{{
	"
		$('document').ready(function () {

			$('input[name=telefono]').inputmask({'mask':'9999-9999999'});
			$('input[name=movil]').inputmask({'mask':'9999-9999999'});
			
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
							primer_nombre:{required:!0,alpha: true,rangelength: [1 , 45]},
							segundo_nombre:{required:!0,alpha: true,rangelength: [1 , 45]},
							primer_apellido:{required:!0,alpha: true,rangelength: [1 , 45]},
							segundo_apellido:{required:!0,alpha: true,rangelength: [1 , 45]},
							fecha_nacimiento:{required:!0,date: true},
							sexo:{required:!0},
							movil:{required:!0},
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
	
			$('#formWizard').bootstrapWizard({
				nextSelector:'.nextBtn',
                previousSelector:'.prevBtn',
				tabClass: 'nav nav-pills',
				onNext:function(tab, navigation, index)
                {
					
					var rango = navigation.find('li').length;
					var next = index + 1;
					if($('#wizForm').valid() == 1){
						//alert($('#wizForm').valid())
						$('.alert-danger').hide();
                    	$('.stepHeader',$('#formWizard')).text('Step '+(index+1)+' of '+rango);
						for(var l=navigation.find('li'),d=0;index>d;d++)
						jQuery(l[d]).addClass('done');
					}else{
						return false;
					}
					if(next >= rango){
						$('#formWizard').find('.submitBtn').show();
					}
                },
				onPrevious:function(tab, navigation, index){
					var rango = navigation.find('li').length;
                    r=index+1;
                   	$('.stepHeader',$('#formWizard')).text('Step '+(index+1)+' of '+rango);
					$('#formWizard').find('.submitBtn').hide();
				},
				onTabShow: function(tab, navigation, index){
					var total = navigation.find('li').length;
					var current = index+1;
					var percent = (current/total) * 100;
					$('#formWizard').find('.progress-bar').css({width:percent+'%'});
				},
				onTabClick:function()
                {
                	return true;
                },

			});
			$('#formWizard').find('.prevBtn').show();
		 });
	"
}}
