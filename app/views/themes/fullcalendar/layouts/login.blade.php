<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/cloud-admin.css')}}" >
	
	<link href="{{asset('themes/Cloud_Admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/uniform/css/uniform.default.min.css')}}" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/animatecss/animate.min.css')}}" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="index.html"><img src="{{asset('themes/Cloud_Admin/img/logo-ministerio-del-deporte.png')}}" height="200" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!--login-->
				@yield('login')
			<!--forgot-->
				@yield('forgot')
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
		
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- JQUERY -->
		<script src="{{asset('themes/Cloud_Admin/js/jquery/jquery-2.0.3.min.js')}}"></script>
		<!-- JQUERY UI-->
		<script src="{{asset('themes/Cloud_Admin/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
		<!-- BOOTSTRAP -->
		<script src="{{asset('themes/Cloud_Admin/bootstrap-dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jQuery-BlockUI/jquery.blockUI.min.js')}}"></script>
		<!-- INPUT MASK -->
		<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
		<!-- WIZARD -->
		<script src="{{asset('themes/Cloud_Admin/js/jquery-validate/jquery.validate.min.js')}}"></script>
		<script src="{{asset('themes/Cloud_Admin/js/jquery-validate/additional-methods.min.js')}}"></script>
		<!-- BOOTBOX -->
		<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/bootbox/bootbox.min.js')}}"></script>
		<script src="{{asset('themes/form/jquery.form.min.js')}}"></script> 
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="{{asset('themes/Cloud_Admin/js/fancybox/source/jquery.fancybox.css')}}" type="text/css" media="screen" />
		<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
		<!--fullcalendar-->
	
		<!-- WIZARD -->
		<script src="{{asset('themes/Cloud_Admin/js/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>		
	
		<!-- CUSTOM SCRIPT -->
		<script src="{{ asset('themes/Cloud_Admin/js/bootstrap-wizard/form-wizard.min.js')}}"></script>

        <link href="{{asset('themes/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
        <script src="{{asset('themes/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{asset('themes/fullcalendar/fullcalendar.min.js')}}"></script>
		
		<!-- DATE RANGE PICKER -->
		<script src="{{asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/moment.min.js')}}"></script>
		<script src="{{asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/daterangepicker.min.js')}}"></script>
		<!-- SLIMSCROLL -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js')}}"></script>

	<!-- BLOCK UI -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jQuery-BlockUI/jquery.blockUI.min.js')}}"></script>

	<!-- SPARKLINES -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/sparklines/jquery.sparkline.min.js')}}"></script>

	<!-- EASY PIE CHART -->

	<script src="{{asset('themes/Cloud_Admin/js/jquery-easing/jquery.easing.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/easypiechart/jquery.easypiechart.min.js')}}"></script>

	<!-- FLOT CHARTS -->

	<script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.min.js')}}"></script>

	<script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.time.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.selection.min.js')}}"></script>

	<script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.resize.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.pie.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.stack.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.crosshair.min.js')}}"></script>

	<!-- TODO -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jquery-todo/js/paddystodolist.js')}}"></script>

	<!-- TIMEAGO -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/timeago/jquery.timeago.min.js')}}"></script>



	<!-- COOKIE -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/jQuery-Cookie/jquery.cookie.min.js')}}"></script>

	<!-- GRITTER -->

	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/gritter/js/jquery.gritter.min.js')}}"></script>

	<!-- CUSTOM SCRIPT -->
	<script src="{{ asset('themes/Cloud_Admin/js/script.js')}}"></script>
	
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="{{asset('themes/Cloud_Admin/js/datatables/media/js/jquery.dataTables.min.js')}}"></script>

	<!-- UNIFORM -->
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/uniform/jquery.uniform.min.js')}}"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>