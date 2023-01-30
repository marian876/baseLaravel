@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Copias de seguridad</h1>
@stop

@section('content')

<div class="btn-group float-left" role="group" aria-label="Basic example">
    <a href="{{route('admin.maintenance.backup')}}" class="btn btn-outline-primary btn-sm ">Nueva copia de seguridad</a>
</div>
    

@stop