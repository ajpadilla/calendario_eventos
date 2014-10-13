<table class="table table-striped table-bordered">
	<tbody>
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('fecha_hora', 'Fecha - Hora: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('fecha_hora',$evento->start, array('class' => 'form-control','id'=>'fecha_hora')) }}
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					{{ Form::label('titulo', 'Titulo: ', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('titulo',$evento->title, array('class' => 'form-control','id'=>'titulo')) }}
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('descripcion', 'Descripción: ', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('descripcion',$evento->descripcion, array('class' => 'form-control','id'=>'descripcion')) }}
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					{{ Form::label('direccion', 'Dirección: ', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('direccion',$evento->direccion, array('class' => 'form-control','id'=>'direccion')) }}
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('observacion', 'Observación: ', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('observacion',$evento->observacion, array('class' => 'form-control','id'=>'observacion')) }}
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					{{ Form::label('estatus', 'Estatus del evento: ',array('class'=>'control-label col-md-3')) }}
					<div class="col-md-8">
					{{ Form::select('estatus',array('Estatus' => array('Pendiente'=>'Pendiente','Realizado'=>'Realizado','No realizado'=>'No Realizado','Modificado'=>'Modificado','obrero'=>'obrero')),$evento->estatus,array('class' => 'form-control','id'=>'estatus')) }}
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('articulaciones', 'Articulaciones: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::select('articulaciones',$articulaciones,$evento->articulacion->id,array('class' => 'form-control','id'=>'articulaciones')) }}
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					{{ Form::label('impactos', 'Impactos: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::select('impactos',$impactos,$evento->impacto->id,array('class' => 'form-control','id'=>'impactos')) }}
					</div>
				</div>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('subsistemas', 'Subsistemas: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::select('subsistemas',$subsistemas,$evento->subsistema->id,array('class' => 'form-control','id'=>'subsistemas')) }}
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					{{ Form::label('estados', 'Estados: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::select('estados',$estados,$evento->municipio->estado->id,array('class' => 'form-control','id'=>'estados')) }}
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">
					{{ Form::label('municipios', 'Municipios: ',array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::select('municipios',$municipios,$evento->municipio->id,array('class' => 'form-control','id'=>'municipios')) }}
					</div>
				</div>
				{{ Form::text('id', $evento->id, array('class' => 'form-control','style'=>'display: none;','id'=>'id')) }}	
			</td>
			<td>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-offset-3 col-md-9">
							<a id="registrar" href="javascript:;" class="btn btn-primary">Registrar<i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</td>
		</tr>	
	</tbody>
</table>











