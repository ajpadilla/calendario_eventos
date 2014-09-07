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
 
		<!-- WIZARD -->
		<link rel="stylesheet" type="text/css" href="{{asset('themes/Cloud_Admin/js/bootstrap-wizard/wizard.css')}}" />      

 		<!-- JQUERY -->
		<script src="{{asset('themes/Cloud_Admin/js/jquery/jquery-2.0.3.min.js')}}"></script>

		<script>
			@yield('script')
		</script>    
		<style>
			.cal-popup {
				display:none;
				position:fixed;
				top:40%;
				left:40%;
				background-color:#f5f5f5;
				z-index:9999;
				height:730px;
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
	
		
<section id="page">
<div id="sidebar" class="sidebar">
<div class="sidebar-menu nav-collapse">
<div class="divide-20"></div>
<!-- SEARCH BAR -->
<div id="search-bar">
<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
</div>
<!-- /SEARCH BAR -->	
<!-- SIDEBAR QUICK-LAUNCH -->
<!-- <div id="quicklaunch">
<!-- /SIDEBAR QUICK-LAUNCH -->
<!--<!-- SIDEBAR MENU -->
<ul>
<li class="active">
<a href="index.html">
<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
<span class="selected"></span>
</a>	
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">UI Features</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li>
<a class="" href="elements.html">
<span class="sub-menu-text">Elements</span></a>
</li>
<li>
<a class="" href="notifications.html">
<span class="sub-menu-text">Hubspot Notifications</span>
</a>
</li>
<li>
<a class="" href="buttons_icons.html">
<span class="sub-menu-text">Buttons &amp; Icons</span>
</a>
</li>
<li>
<a class="" href="sliders_progress.html">
<span class="sub-menu-text">Sliders &amp; Progress</span>
</a>
</li>
<li>
<a class="" href="typography.html">
<span class="sub-menu-text">Typography</span>
</a>
</li>
<li>
<a class="" href="tabs_accordions.html">
<span class="sub-menu-text">Tabs &amp; Accordions</span>
</a>
</li>
<li>	
<a class="" href="treeview.html">
<span class="sub-menu-text">Treeview</span>
</a>
</li>
<li>
<a class="" href="nestable_lists.html">
<span class="sub-menu-text">Nestable Lists</span>
</a>
</li>
<li class="has-sub-sub">
<a href="javascript:;" class=""><span class="sub-menu-text">Third Level Menu</span>
<span class="arrow"></span>
</a>
<ul class="sub-sub">
<li><a class="" href="#"><span class="sub-sub-menu-text">Item 1</span></a></li>
<li><a class="" href="#"><span class="sub-sub-menu-text">Item 2</span></a></li>
</ul>
</li>
</ul>
</li>
<li>
<a class="" href="frontend_theme/index.html" target="_blank">
<i class="fa fa-desktop fa-fw"></i> <span class="menu-text">Frontend Theme</span>
</a>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-table fa-fw"></i> <span class="menu-text">Tables</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="simple_table.html"><span class="sub-menu-text">Simple Tables</span></a></li>
<li><a class="" href="dynamic_tables.html"><span class="sub-menu-text">Dynamic Tables</span></a></li>
<li><a class="" href="jqgrid_plugin.html"><span class="sub-menu-text">jqGrid Plugin</span></a></li>
</ul>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-pencil-square-o fa-fw"></i> <span class="menu-text">Form Elements</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="forms.html"><span class="sub-menu-text">Forms</span></a></li>
<li><a class="" href="wizards_validations.html"><span class="sub-menu-text">Wizards &amp; Validations</span></a></li>
<li><a class="" href="rich_text_editors.html"><span class="sub-menu-text">Rich Text Editors</span></a></li>
<li><a class="" href="dropzone_file_upload.html"><span class="sub-menu-text">Dropzone File Upload</span></a></li>
</ul>
</li>
<li>
<a class="" href="widgets_box.html"><i class="fa fa-th-large fa-fw"></i> <span class="menu-text">Widgets &amp; Box</span></a>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-bar-chart-o fa-fw"></i> <span class="menu-text">Visual Charts</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="flot_charts.html"><span class="sub-menu-text">Flot Charts</span></a></li>
<li><a class="" href="xcharts.html"><span class="sub-menu-text">xCharts</span></a></li>
<li><a class="" href="others.html"><span class="sub-menu-text">Others</span></a></li>
</ul>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-columns fa-fw"></i> <span class="menu-text">Layouts</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="mini_sidebar.html"><span class="sub-menu-text">Mini Sidebar</span></a></li>
<li><a class="" href="fixed_header.html"><span class="sub-menu-text">Fixed Header</span></a></li>
<li><a class="" href="fixed_header_sidebar.html"><span class="sub-menu-text">Fixed Header &amp; Sidebar</span></a></li>	
</ul>
</li>
<li>
<a class="" href="calendar.html"><i class="fa fa-calendar fa-fw"></i>
<span class="menu-text">Calendar
<span class="tooltip-error pull-right" title="" data-original-title="3 New Events">
<span class="label label-success">New</span>
</span>
</span>
</a>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-map-marker fa-fw"></i> <span class="menu-text">Maps</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="google_maps.html"><span class="sub-menu-text">Google Maps</span></a></li>
<li><a class="" href="vector_maps.html"><span class="sub-menu-text">Vector Maps</span></a></li>
</ul>
</li>
<li>
<a class="" href="gallery.html"><i class="fa fa-picture-o fa-fw"></i> <span class="menu-text">Gallery</span></a>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-file-text fa-fw"></i> <span class="menu-text">More Pages</span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li>
<a class="" href="login.html"><span class="sub-menu-text">Login &amp; Register Option 1</span>
</a>
</li>
<li>
<a class="" href="login_bg.html"><span class="sub-menu-text">Login &amp; Register Option 2</span></a>
</li>
<li><a class="" href="user_profile.html"><span class="sub-menu-text">User profile</span></a></li>
<li><a class="" href="chats.html"><span class="sub-menu-text">Chats</span></a></li>
<li><a class="" href="todo_timeline.html"><span class="sub-menu-text">Todo &amp; Timeline</span></a></li>
<li><a class="" href="address_book.html"><span class="sub-menu-text">Address Book</span></a></li>
<li><a class="" href="pricing.html"><span class="sub-menu-text">Pricing</span></a></li>
<li><a class="" href="invoice.html"><span class="sub-menu-text">Invoice</span></a></li>
<li><a class="" href="orders.html"><span class="sub-menu-text">Orders</span></a></li>
</ul>
</li>
<li class="has-sub">
<a href="javascript:;" class="">
<i class="fa fa-briefcase fa-fw"></i> <span class="menu-text">Other Pages <span class="badge pull-right">9</span></span>
<span class="arrow"></span>
</a>
<ul class="sub">
<li><a class="" href="search_results.html"><span class="sub-menu-text">Search Results</span></a></li>
<li><a class="" href="email_templates.html"><span class="sub-menu-text">Email Templates</span></a></li>
<li><a class="" href="error_404.html"><span class="sub-menu-text">Error 404 Option 1</span></a></li><li><a class="" href="error_404_2.html"><span class="sub-menu-text">Error 404 Option 2</span></a></li><li><a class="" href="error_404_3.html"><span class="sub-menu-text">Error 404 Option 3</span></a></li>
<li><a class="" href="error_500.html"><span class="sub-menu-text">Error 500 Option 1</span></a></li><li><a class="" href="error_500_2.html"><span class="sub-menu-text">Error 500 Option 2</span></a></li>
<li><a class="" href="faq.html"><span class="sub-menu-text">FAQ</span></a></li>
<li><a class="" href="blank_page.html"><span class="sub-menu-text">Blank Page</span></a></li>
</ul>
</li>
</ul>
<!-- /SIDEBAR MENU -->
</div>
</div>
	

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
		<script>

		jQuery(document).ready(function() {		

			App.setPage("form");  //Set current page

			App.init(); //Initialise plugins and elements

		});

	</script>
</body>
</html>
