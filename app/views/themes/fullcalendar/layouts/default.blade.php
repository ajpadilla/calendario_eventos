<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
        <link href="{{asset('themes/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
        <script src="{{asset('themes/fullcalendar/lib/moment.min.js') }}"></script>
        <script src="{{asset('themes/fullcalendar/lib/jquery.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('themes/fullcalendar/custom.js')}}"></script>
        <!--<script>
            alert("Hola mundo");
        </script>-->
        <style>
	        body {
		        margin: 40px 10px;
		        padding: 0;
		        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		        font-size: 14px;
	        }
	        #calendar {
		        max-width: 900px;
		        margin: 0 auto;
	        }
        </style>
    </head>
    <body>
	    <div id='calendar'></div>
    </body>
</html>
