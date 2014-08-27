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
               		<a href="">
                		<img src="/Cloud_Admin/img/logo/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120" />
                	</a>
        		</div>
			
				<!-- NAVBAR LEFT -->
				<ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
					<li class=""><a href="#" data-toggle="tab">More</a></li>
					<li class=""><a href="#" data-toggle="tab">Profile</a></li>
					<li class="active"><a href="" data-toggle="tab">Home</a></li>
				</ul>
            	<!-- /NAVBAR LEFT -->
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
                	<li class="dropdown user" id="header-user">
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    		<img alt="" src="{{asset('themes/Cloud_Admin/img/avatars/avatar3.jpg')}}" />
                        	<span class="username">John Doe</span>
                        	<i class="fa fa-angle-down"></i>
                    	</a>
                    	<ul class="dropdown-menu">
                   			<li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
                        	<li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li>
                        	<li><a href="#"><i class="fa fa-eye"></i> Privacy Settings</a></li>
                        	<li><a href="/Cloud_Admin/login.html"><i class="fa fa-power-off"></i> Log Out</a></li>
                    	</ul>
                	</li>
               		<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
		</header>   	
	
	    <div id='calendar'></div>
    </body>
</html>
