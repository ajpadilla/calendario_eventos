{{-- Incliyendo plugin AjaxForm --}}

{{
	"
		$(function (){

			$('#formEstado').validate({
				rules:{nombre:{required:!0},
				},
			});
			$('#formEstado').ajaxForm(function() { 
            	alert('Thank you for your comment!'); 
            });

		});
	"
}}
