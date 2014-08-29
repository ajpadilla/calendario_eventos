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
                <h4><i class="fa fa-reorder"></i>Lista de estados</h4>
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
            <div class="box-body">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<td>ID</td>
							<td>NOMBRE</td>
						</tr>
					</thead>
					<tbody>
					@foreach($estados as $estado)
					<tr>
						<td>{{ $estado->id }}</td>
						<td>{{ $estado->nombre }}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
            </div>
      </div>
  @stop
                          