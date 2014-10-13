<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Evento</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('themes/prints/files/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('themes/fullcalendar/imprimir.css')}}" media="print" /> 
     <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('themes/prints/files/jquery.min.js')}}"></script>
    <script>
      @yield('script')
    </script>    
    <style type="text/css">
      #placeholder { width: 400px; height: 300px; }
      #placeholder2 { width: 400px; height: 300px; }
    </style>
  </head>

  <body>

    <div class="oculto" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/starter-template/#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://getbootstrap.com/examples/starter-template/#"></a></li>
            <li><a href="http://getbootstrap.com/examples/starter-template/#about"></a></li>
            <li><a href="http://getbootstrap.com/examples/starter-template/#contact"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        @yield('body')
    </div><!-- /.container -->

    <!-- FLOT CHARTS -->

  <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.min.js')}}"></script>

  <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.time.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.selection.min.js')}}"></script>

  <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.resize.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.pie.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.stack.min.js')}}"></script>

    <script src="{{asset('themes/Cloud_Admin/js/flot/jquery.flot.crosshair.min.js')}}"></script>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('themes/prints/files/bootstrap.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('themes/prints/files/ie10-viewport-bug-workaround.js')}}"></script>
  

</body></html>
