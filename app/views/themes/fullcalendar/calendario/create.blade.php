@extends('themes.fullcalendar.layouts.form_content')

@section('page_header')
	<ul class="breadcrumb">
    	<li>
        	<i class="fa fa-home"></i>
            <a href="#">Home</a>
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
    <div class="description">Calendario de eventos</div>
@stop

@section('form')
	<div class="box border blue">
    	<div class="box-title">
			<h4><i class="fa fa-reorder"></i>Calendario de eventos</h4>
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
       		 <div id='calendar'></div>
			<div class="popup cal-popup">
      			<h2>Add event!</h2>
      			<br/>
      			<h1>Event title:</h1>
      			<input class="title" type="text" size="26" placeholder="Titulo"/>     	
      			<input class="title" type="text" size="26" placeholder="Descripción"/>      
      			<input class="title" type="text" size="26" placeholder="Hora"/>      
      			<input class="title" type="text" size="26" placeholder="Dirección"/>      
      			<input class="title" type="text" size="26" placeholder="Observación"/>  
				<select id="articulaciones" name="Articulaciones">
                	<option value="" disabled selected>Articulaciones</option>
                </select>
				<select id="impactos" name="Impactos">
                      <option value="" disabled selected>Impactos</option>
                </select>
      			<input class="title" type="text" size="26" placeholder="Subsistema"/>
				<select id="subsistemas" name="Subsistemas">
                      <option value="" disabled selected>Subsistemas</option>
                </select>
				<select id="estados" name="Estado">
    				<option value="" disabled selected>Estado</option>
                </select>      
				<select id="municipios" name="Municipios">
    				<option value="" disabled selected>Municipio</option>
				</select>
      			<a href="#" onclick="return false" class="submitForm" style="color:black;"><button>Submit</button></a>&emsp;
     			<a href="#" onclick="return false" class="exit" style="color:black;"><button>cancel</button></a>
    		</div>
       	</div>
	</div>
@stop
