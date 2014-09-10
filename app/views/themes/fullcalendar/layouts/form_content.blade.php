@extends('themes.fullcalendar.layouts.default')

@section('script')
@stop

@section('body')
<div class="container">
	<div class="row">
    	<div id="content" class="col-lg-12">
        	<!-- PAGE HEADER-->
            <div class="row">
            	<div class="col-sm-12">
               		<div class="page-header">
                    	@yield('page_header')
                    </div>
                </div>
           	</div>
        	<!-- /PAGE HEADER -->
           	<!-- FORMS -->
            <div class="row">
           		<div class="col-md-12">
              		@yield('form')
           		</div>
        	</div>
     	</div>
	</div>
</div>
@stop
