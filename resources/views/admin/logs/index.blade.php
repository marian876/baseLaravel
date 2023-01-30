@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Reporte de autenticación</h1>

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr class="">
                                <td scope="row"> {{$log->authenticatable_id}}</td>
                                <td scope="row"> {{$log->ip_address}}</td>
                                <td scope="row"> {{$log->user_agent}}</td>
                                <td scope="row"> {{$log->login_at}}</td>
                                <td scope="row"> {{$log->logout_at}}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

