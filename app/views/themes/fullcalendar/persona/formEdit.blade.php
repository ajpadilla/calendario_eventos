{{ Form::open(array('action' => 'PersonaController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
<table class="table table-striped table-bordered">
  <tbody>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('evento_ids[]', 'Eventos:',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-8">
            {{ Form::select('evento_ids[]',$eventos,Input::old('evento_ids[]'),array('class'=>'form-control','id'=>'eventos_edit','multiple'=>'multiple')) }}
            {{ Form::text('id', $persona->id, array('class' => 'form-control','style'=>'display: none;','id'=>'id')) }} 
          </div>
        </div>
      </td>
      <td>
        <div class="form-group">
          {{ Form::label('cedula', 'Cédula: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('cedula', $persona->cedula, array('class' => 'form-control','id'=>'cedula')) }}
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>

        <div class="form-group">
          {{ Form::label('nombres', 'Nombres: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('nombres', $persona->nombres, array('class' => 'form-control','id'=>'nombres')) }}
          </div>
        </div>
      </td>
      <td>
        <div class="form-group">
          {{ Form::label('apellidos', 'Apellidos: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('apellidos', $persona->apellidos, array('class' => 'form-control','id'=>'apellidos')) }}
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('nacionalidad', 'Nacionalidad: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('nacionalidad',array('v' => 'V', 'e' => 'E'),$persona->nacionalidad,array('class' => 'form-control','id'=>'nacionalidad')) }}
          </div>
        </div>
      </td>
      <td>
        <div class="form-group">
          {{ Form::label('sexo', 'Género: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-2">
            F{{ Form::radio('sexo', 'f',$persona->sexo, array('class' => 'radio-inline')) }}
            M{{ Form::radio('sexo', 'm',$persona->sexo, array('class' => 'radio-inline')) }}
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('Dirección', 'Dirección: ',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-8">
            {{ Form::textarea('direccion', $persona->direccion, array('class' => 'form-control','rows'=>'3','cols'=>'3','id'=>'direccion')) }}
          </div>
        </div>

      </td>
      <td>
        <div class="form-group">
          {{ Form::label('telefono', 'Telefono: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('telefono',$persona->telefono, array('class' => 'form-control','id'=>'telefono')) }}
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('email', 'E-mail: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('email', $persona->email, array('class' => 'form-control','id'=>'email')) }}
          </div>
        </div>
      </td>
      <td>
        <div class="form-group">
          {{ Form::label('estado', 'Estado: ',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-8">
            {{ Form::select('estado',$estados,$persona->municipio->estado->id,array('class' => 'form-control','id'=>'estados')) }}
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="form-group">
          {{ Form::label('municipio', 'Municipio: ',array('class'=>'control-label col-md-3')) }}
          <div class="col-md-8">
            {{ Form::select('municipio',$municipios,$persona->municipio->id,array('class' => 'form-control','id'=>'municipio')) }}
          </div>
        </div>
      </td>
      <td>
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
  </tbody>
</table>
{{ Form::close() }}

