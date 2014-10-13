
@extends('themes.fullcalendar.layouts.form_content')

@section('script')
    @include('themes.fullcalendar.eventos.partials.graficosPie')
@stop

@section('form')
    <div class="box border blue">
        <div class="box-title">
            <h4><i class="fa fa-reorder"></i>{{$evento->title}}</h4>
            <div class="tools hidden-xs">
                <a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
                <a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
                <a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
                <a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="box-body form">
            <canvas id="porcentaje_sexo" width="400" height="400"></canvas>
            <canvas id="porcentaje_tipo_persona" width="400" height="400"></canvas>
        </div>
    </div>
</div>
@stop



  
