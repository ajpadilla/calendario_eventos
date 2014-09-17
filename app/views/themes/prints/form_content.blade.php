@extends('themes.prints.default')

@section('body')
            <a onclick="window.print();" class="oculto btn btn-primary">Imprimir<i class="fa fa-arrow-circle-right"></i></a>
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td colspan="3" class="text-center"><h1>Datos del evento</h1></td>
                        </tr>
                    </thead>
                      <tbody>
                        <tr>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('titulo', 'Titulo: ', array('class' => 'control-label')) }}
                                    {{ Form::label('titulo',$evento->title, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('fecha', 'Fecha: ', array('class' => 'control-label')) }}
                                    {{ Form::label('fecha',$fecha['0'], array('class' => 'control-label')) }}
                                 </div>
                            </td>
                            <td>
                                 <div class="form-group col-md-4">
                                    {{ Form::label('hora', 'Hora: ', array('class' => 'control-label')) }}
                                    {{ Form::label('hora',$fecha['1'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('estado', 'Estado: ', array('class' => 'control-label')) }}
                                    {{ Form::label('estado',$evento->municipio->estado->nombre, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('municipio', 'Municipio: ', array('class' => 'control-label')) }}
                                    {{ Form::label('municipio',$evento->municipio->nombre, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('articulacion', 'Articulación: ', array('class' => 'control-label')) }}
                                    {{ Form::label('articulacion',$evento->articulacion->nombre, array('class' => 'control-label')) }}
                                </div>

                            </td>
                        </tr>
                         <tr>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('subsistema', 'Subsistema: ', array('class' => 'control-label')) }}
                                    {{ Form::label('subsistema',$evento->subsistema->nombre, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('impacto', 'Impacto: ', array('class' => 'control-label')) }}
                                    {{ Form::label('impacto',$evento->impacto->nombre, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('descripcion', 'Descripción: ', array('class' => 'control-label')) }}
                                    {{ Form::label('descripcion',$evento->descripcion, array('class' => 'control-label')) }}
                                </div>
                            </td>
                        </tr>
                        <tr> 
                            <td>   
                                <div class="form-group col-md-4">
                                    {{ Form::label('direccion', 'Dirección: ', array('class' => 'control-label')) }}
                                    {{ Form::label('nombre',$evento->direccion, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('observacion', 'Observación: ', array('class' => 'control-label')) }}
                                    {{ Form::label('observacion',$evento->observacion, array('class' => 'control-label')) }}
                                </div>
                            </td>
                            @if(!$evento->personas->isEmpty())
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('ContadorAdministrativo', 'Nro personal administrativo: ', array('class' => 'control-label')) }}
                                    {{ Form::label('contadorAdministrativo',$contador_tipo['administrativo'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                             <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('ContadorDirctivo', 'Nro directivos: ', array('class' => 'control-label')) }}
                                    {{ Form::label('contadorDirectivo',$contador_tipo['directivo'], array('class' => 'control-label')) }}
                                </div>
                            </td>
     
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('ContadorDocente', 'Nro docentes: ', array('class' => 'control-label')) }}
                                    {{ Form::label('contadorDocente',$contador_tipo['docente'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('ContadorEstudiante', 'Nro estudiantes: ', array('class' => 'control-label')) }}
                                    {{ Form::label('contadorEstudiante',$contador_tipo['estudiante'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 <div class="form-group col-md-4">
                                    {{ Form::label('ContadorObrero', 'Nro obreros: ', array('class' => 'control-label')) }}
                                    {{ Form::label('contadorObrero',$contador_tipo['obrero'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('PorcentajeEstudiante', '% estudiantes: ', array('class' => 'control-label')) }}
                                    {{ Form::label('porcentajeEstudiante',$porcentaje_tipo['estudiante'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('PorcentajeDirectivo', '% directivos: ', array('class' => 'control-label')) }}
                                    {{ Form::label('porcentajeDirectivo',$porcentaje_tipo['directivo'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                       </tr>
                        <tr>        
                            <td>    
                                <div class="form-group col-md-4">
                                    {{ Form::label('PorcentajeObrero', '% obreros: ', array('class' => 'control-label')) }}
                                    {{ Form::label('porcentajeObrero',$porcentaje_tipo['obrero'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                             <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('PorcentajeAdministrativo', '% personal administrativo: ', array('class' => 'control-label')) }}
                                    {{ Form::label('porcentajeAdministrativo',$porcentaje_tipo['administrativo'], array('class' => 'control-label')) }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-md-4">
                                    {{ Form::label('PorcentajeDocente', '% docentes: ', array('class' => 'control-label')) }}
                                    {{ Form::label('porcentajeDocente',$porcentaje_tipo['docente'], array('class' => 'control-label')) }}
                                </div>
                            </td>

                        </tr>
                    </tbody>

                </table>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td colspan="4" class="text-center"> <h1 class="text-center">Lista de participantes al evento</h1></td>
                        </tr>
                        <tr>
                            <td>Cargo</td>
                            <td>Cedula</td>
                            <td>Nombres</td>
                            <td>Apellidos</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($evento->personas as $persona)
                            <tr>
                                <td>{{ $persona->pivot->tipo }}</td>
                                <td>{{ $persona->cedula }}</td>
                                <td>{{ $persona->nombres }}</td>
                                <td>{{ $persona->apellidos }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay personas asociadas al evento</p>
            @endif
@stop


