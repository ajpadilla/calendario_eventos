@extends('themes.fullcalendar.calendario.form')

@section('script')
  @include('themes.fullcalendar.persona.partials.invitarPersona')
@stop

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
      <h4><i class="fa fa-reorder"></i><span class="stepHeader">Agregar Persona</span></h4>
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
        {{ Form::open(array('action' => 'PersonaController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
         <table class="table table-striped table-bordered">
  <tbody>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('evento_ids', 'Eventos:',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-4">
            {{ Form::select('evento_ids',array(),Input::old('evento_ids'),array('class'=>'form-control','id'=>'eventos')) }}
          </div>
        </div>
      </td>
      <td>
        <div class="form-group">
          {{ Form::label('tipo', 'Tipo de persona: ',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-4">
            {{ Form::select('tipo',array('tipo de persona' => array('estudiante'=>'estudiante','directivo'=>'directivo','administrativo'=>'administrativo','docente'=>'docente','obrero'=>'obrero')),Input::old('municipio'),array('class' => 'form-control','id'=>'municipio')) }}
          </div>
        </div>
      </td>
      

      <tr>
      <td>
          <div class="form-group">
            {{ Form::label('nacionalidad', 'Nacionalidad: ',array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-4">
              {{ Form::select('nacionalidad',array('v' => 'V', 'e' => 'E'),Input::old('nacionalidad'),array('class' => 'form-control','id'=>'nacionalidad')) }}
            </div>
          </div>
      </td>
        <td>
          <div class="form-group">
            {{ Form::label('cedula', 'Cédula: ', array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-4">
              {{ Form::text('cedula', Input::old('cedula'), array('class' => 'form-control','id'=>'cedula')) }}
            </div>
          </div>
        </td>
      </tr>
      <tr>
         <td colspan="2">
          <div class="wizard-buttons">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-offset-3 col-md-9">
                  <a href="javascript:;" class="btn btn-default prevBtn" style="display: none;">
                    <i class="fa fa-arrow-circle-left"></i> Back
                  </a>
                  <a id="registrar" href="javascript:;" class="btn btn-primary nextBtn" id="persona">
                    Registrar <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tr>
  </tbody>
</table>
        {{ Form::close() }} 
      </div>
  </div>
@stop
