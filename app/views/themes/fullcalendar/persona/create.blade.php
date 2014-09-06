@extends('layouts.form_content')

@section('script')
@stop

@section('page_header')
	<ul class="breadcrumb">
    	<li>
        	<i class="fa fa-home"></i>
            <a href="index.html">Home</a>
        </li>
        <li>
        	<a href="#">Form Elements</a>
        </li>
        <li>Forms</li>
    </ul>
    <!-- /BREADCRUMBS -->
   	<div class="clearfix">
    	<h3 class="content-title pull-left">Forms</h3>
    </div>
    <div class="description">Formulario para agregar personas</div>
@stop

@section('form')
	<div class="box border red" id="formWizard">
    	<div class="box-title">
			<h4><i class="fa fa-reorder"></i>Inscribir nuevo alumno - <span class="stepHeader">Step 1 of 3</span></h4>
           	<div class="tools hidden-xs">
          		<a href="#box-config" data-toggle="modal" class="config">
           			<i class="fa fa-cog"></i>
                </a>
               	<a href="javascript:;" class="reload">
              		<i class="fa fa-refresh"></i>
             	</a>
				<a href="javascript:;" class="collapse">
                	<i class="fa fa-chevron-up"></i>
                </a>
              	<a href="javascript:;" class="remove">
               		<i class="fa fa-times"></i>
                </a>
            </div>
    	</div>
    	<div class="box-body form">
			@include('themes.fullcalendar.persona.formWizard')
       	</div>
	</div>
@stop

