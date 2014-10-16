@extends('themes.fullcalendar.layouts.form_content')

@section('script')
@stop()


@section('page_header')
<!-- /BREADCRUMBS -->
<div class="clearfix">
  <h3 class="content-title pull-left"></h3>
</div>
<div class="description"></div>
@stop

@section('form')
<div class="box border blue">
  <div class="box-title">
    <h4><i class="fa fa-reorder"></i>Agregar usuario</h4>
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
    {{ Form::open(array('url' => 'buscar','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
    <div class="form-group">
    {{ Form::label('nombre', 'Nombre Usuario: ',array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-4">
      {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>'nombre'))}}
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-offset-3 col-md-9">
          {{ Form::submit('Buscar', array('class' => 'btn btn-success')) }}
        </div>
      </div>
    </div>
    {{ Form::close() }} 
  </table>
  
</div>
</div>
@stop

