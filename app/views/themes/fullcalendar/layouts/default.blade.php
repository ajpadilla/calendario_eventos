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
       	
		<!-- ANIMATE -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/css/animatecss/animate.min.css')}}" />
       	 
		<!-- TODO -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/jquery-todo/css/styles.css')}}" />
              
		<!-- GRITTER -->
       	<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/gritter/css/jquery.gritter.css')}}" />
       	<!-- JQUERY -->
		<script src="{{asset('themes/Cloud_Admin/js/jquery/jquery-2.0.3.min.js')}}"></script>


 		
		<script>
			@yield('script')
		</script>    
		<style>
			.cal-popup {
				display:none;
				position:fixed;
				top:50%;
				left:50%;
				background-color:#f5f5f5;
				z-index:9999;
				height:430px;
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
                		<img src="{{asset('themes/Cloud_Admin/img/logo/logo.png')}}" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120" />
                	</a>
        		</div>
			
				<!-- NAVBAR LEFT -->
				<ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
					<li class=""><a href="#" data-toggle="tab">More</a></li>
					<li class=""><a href="#" data-toggle="tab">Profile</a></li>
					<li class="active"><a href="" data-toggle="tab">Home</a></li>
				</ul>
         	</div>
		</header>   	
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
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
        <link href="{{asset('themes/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
        <script src="{{asset('themes/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{asset('themes/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/scripts.js')}}"></script>
</body>
</html>
