{{-- Agregando dataTable con los datos de los beneficiarios --}}

{{
	"
		$('document').ready(function () {
			console.log('load');
			$('#beneficiarios').dataTable({
				 'processing': true,
				 'serverSide': true,
				 'ajax':'" . URL::to('/retorntarBeneficiarios/') ."',
			});
		});
	"
}}
