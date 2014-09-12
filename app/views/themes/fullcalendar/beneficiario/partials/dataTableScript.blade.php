{{-- Agregando dataTable con los datos de los beneficiarios --}}

{{
	"
		$('document').ready(function () {
			//console.log('load');
				$('#beneficiarios').dataTable( {
            		'bProcessing': true,
            		'bServerSide': true,
            		'AjaxSource': '" .URL::to('retorntarBeneficiarios')."'
        		});
		});
	"
}}
