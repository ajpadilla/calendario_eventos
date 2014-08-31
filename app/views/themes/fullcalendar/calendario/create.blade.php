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
				<form id="crear_evento">
      				<input id="titulo" name="titulo" class="title" type="text" size="26" placeholder="Titulo"/><br/>
      				<input id="descripcion" name="descripcion" class="title" type="text" size="26" placeholder="Descripción"/><br/>      
      				<input id="hora" name="hora" class="title" type="text" size="26" placeholder="Hora"/><br/>      
      				<input id="direccion" name="direccion" class="title" type="text" size="26" placeholder="Dirección"/></br>    
      				<input id="observacion" name="observacion" class="title" type="text" size="26" placeholder="Observación"/><br> 
 
					<select id="articulaciones" name="articulaciones">
                		<option value="" disabled selected>Articulaciones</option>
                	</select><br/>
					<select id="impactos" name="impactos">
                    	<option value="" disabled selected>Impactos</option>
                	</select><br/>
					<select id="subsistemas" name="subsistemas">
                    	<option value="" disabled selected>Subsistemas</option>
                	</select><br/>
					<select id="estados" name="estados">
    					<option value="" disabled selected>Estado</option>
                	</select><br/>      
					<select id="municipios" name="municipios">
    					<option value="" disabled selected>Municipio</option>
					</select><br/>
      				<!--<a href="#" onclick="return false" class="submitForm" style="color:black;"><button>Submit</button></a>&emsp;-->
					<input type="submit" class="submitForm" value="Agregar">
     				<a href="#" onclick="return false" class="exit" style="color:black;"><button>cancel</button></a>
				</form>
    		</div>
       	</div>
	</div>
@stop
