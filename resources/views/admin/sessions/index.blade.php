@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Reporte de inicios de sessión</h1>

@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Usuario Id</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Navegador</th>
                            <th scope="col">Ingreso</th>
                            <th scope="col">Salida</th>
                            <th scope="col">Lugar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $session)
                            <tr class="">
                                <td scope="row"> {{$session->user_id}}</td>
                                <td scope="row"> {{$session->ip_address}}</td>
                                <td scope="row"> {{$session->user_agent}}</td>
                                <td scope="row"> {{$session->last_activity}}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

