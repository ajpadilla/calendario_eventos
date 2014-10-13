<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
		<title>Calendario Eventos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      	<!-- STYLESHEETS -->
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/cloud-admin.css')}}" />
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/themes/default.css')}}" id="skin-switcher" />
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/responsive.css')}}" />
       	<link href="{{asset('themes/Cloud_Admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
       	
       	<!-- DATE RANGE PICKER -->
		<link rel="stylesheet" type="text/css" href="{{ asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
		<!-- UNIFORM -->
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/uniform/css/uniform.default.min.css')}}" />

		<!-- ANIMATE -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/animatecss/animate.min.css')}}" />
       	 
		<!-- TODO -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/jquery-todo/css/styles.css')}}" />
              
		<!-- GRITTER -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/gritter/css/jquery.gritter.css')}}" />
 
		<!-- WIZARD -->
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/bootstrap-wizard/wizard.css')}}" />      

 		<!-- JQUERY -->
		<script src="{{asset('themes/Cloud_Admin/js/jquery/jquery-2.0.3.min.js')}}"></script>
		
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/datatables/media/css/jquery.dataTables.min.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css')}}">
		
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/datepicker/themes/default.min.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/datepicker/themes/default.date.min.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/datepicker/themes/default.time.min.css')}}">
			
		<link rel="stylesheet" href="{{asset('themes/Cloud_Admin/js/datetimepicker/jquery.datetimepicker.css')}}">
		

        <link href="{{asset('themes/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />

        <!--Imprimir-->
        <link rel="stylesheet" type="text/css" href="{{asset('themes/fullcalendar/imprimir.css')}}" media="print" />  	

		<script>
			@yield('script')
		</script>    
		<style>
			.cal-popup {
				display:none;
				position:absolute;
				top:10%;
				left:20%;
				background-color:#f5f5f5;
				z-index:9999;
				height:760px;
				width:500px;
				border:1px;
				border-color:grey;
				border-radius:3px;
				border-style:solid;
				padding:5px;
				-moz-transition:all .2s ease-out 0;
				-webkit-transition:all .2s ease-out 0;
				transition:all .2s ease-out 0;
			}
           
		</style>
    </head>
    <body>
		<header class="navbar clearfix" id="header">
			<div class="container">
				<div class="navbar-brand">
            		<!-- COMPANY LOGO -->
               		<a href="/">
                		<img src="{{asset('themes/Cloud_Admin/img/t_mision_156.jpg')}}" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120" />
                	</a>
        		</div>
			
				<!-- NAVBAR LEFT -->
				<ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
					<!--<li class=""><a href="#" data-toggle="tab">More</a></li>
					<li class=""><a href="#" data-toggle="tab">Profile</a></li>-->
					<li><a href="#" data-toggle="tab">(0276)-3484169</a></li>
				</ul>
			
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user"></i>
							<span class="username">{{ Auth::user()->username }}</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{URL::to('logout')}}"><i class="fa fa-power-off"></i>Cerrar sesion</a></li>
						</ul>
					</li>
				</ul>
         	</div>
		</header>   	
	
		 <section id="page">
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-20"></div>
						<!-- SEARCH BAR -->
						<div id="search-bar">
							<!--<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>-->
						</div>
						<!-- /SEARCH BAR -->	
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						<!--<!-- SIDEBAR MENU -->
							
							<ul>
								<li class="active">
									<a href="{{URL::to('sesionUsuario')}}"><i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Inicio</span>
										<span class="selected"></span>
									</a>	
								</li>
					
								
								<li class="has-sub">
									<a href="javascript:;" class="">
										<i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">Persona</span>
										<span class="arrow"></span>
									</a>
									<ul class="sub">
										<li>
											<a class="" href="{{URL::to('vistaPersonasUsuario')}}"><span class="sub-menu-text">Agregar</span></a>
										</li>
										<li>
											<a class="" href="{{URL::to('vistaListaPersonasUsuario')}}">
												<span class="sub-menu-text">Lista de personas</span>
											</a>
										</li>
									</ul>
								</li>
							</div>
						</div>
	
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" id="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
					  		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					  			<h4 class="modal-title">Box Settings</h4>
							</div>
							<div class="modal-body">
					  			Here goes box setting content.
							</div>
							<div class="modal-footer">
					  			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 		 	<button type="button" class="btn btn-primary">Save changes</button>
							</div>
				  		</div>
					</div>
			  	</div>		
				@yield('body')	
			</div>
		<div>
	</section>
		<!-- JAVASCRIPTS -->
		
		<!-- Placed at the end of the document so the pages load faster -->
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

        <script src="{{asset('themes/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{asset('themes/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/lang/es.js')}}"></script>
		
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
	<script src="{{asset('themes/Cloud_Admin/js/bootstrap-daterangepicker/daterangepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/datepicker/picker.js')}}"></script>
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/datepicker/picker.date.js')}}"></script>
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/datepicker/picker.time.js')}}"></script>
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/datetimepicker/jquery.datetimepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('themes/Cloud_Admin/js/Chart.min.js')}}"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("form");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	
</body>
</html>
