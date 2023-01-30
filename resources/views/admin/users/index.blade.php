@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Lista de usuarios</h1>
    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
@stop
@section('content')
    @livewire('admin.users-index')
@stop

