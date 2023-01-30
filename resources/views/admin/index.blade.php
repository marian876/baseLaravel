@extends('adminlte::page')

@section('title', 'Panel de control')
    <link rel="icon" href="{{asset('/vendor/adminlte/dist/img/AdminLTELogo.png')}}">

@section('content_header')
    <h1>Panel de control</h1>
@stop

@section('content')
    <p>Bienvenido al panel de control.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
