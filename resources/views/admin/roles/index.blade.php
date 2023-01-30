@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href=" {{route('admin.roles.create')}}" class="btn btn-secondary btn-sm float-right">Agregar Rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $rol)
                            <tr class="">
                                <td scope="row"> {{$rol->id}} </td>
                                <td scope="row"> {{$rol->name}}</td>
                                <td width='10px'> 
                                    <a href=" {{route('admin.roles.edit',$rol)}} " class="btn btn-sm btn-primary">Editar</a>
                                </td>
                                <td width='10px'>
                                    <form action=" {{route('admin.roles.destroy',$rol)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@stop

