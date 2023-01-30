@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.categories.create')}}" class="btn btn-secondary btn-sm float-right">Agregar categoría</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="">
                                <td scope="row"> {{$category->id}} </td>
                                <td scope="row"> {{$category->name}}</td>
                                <td width="10px" >
                                    <a href="{{route('admin.categories.edit',$category)}} " type="button" class="btn btn-primary btn-sm">Editar</a>                                
                                </td>
                                <td width="10px" >
                                    <form action=" {{route('admin.categories.destroy',$category)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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

