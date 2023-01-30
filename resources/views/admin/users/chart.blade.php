@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Estadísticas</h1>
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $chart->options['chart_title'] }}</h1>
                    {!! $chart->renderHtml() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@stop
@section('js')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
@endsection