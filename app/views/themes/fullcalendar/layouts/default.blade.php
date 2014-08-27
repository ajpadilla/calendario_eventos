<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
		<title>Calendario Eventos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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
       
		<!--fullcalendar-->
        <link href="{{asset('themes/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
        <script src="{{asset('themes/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{asset('themes/fullcalendar/lib/jquery.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/scripts.js')}}"></script>
  	 	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
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
    </body>
</html>
