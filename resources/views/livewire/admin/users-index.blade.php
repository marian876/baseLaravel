<div>
    <div class="card">     
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del usuario">
        </div>
        @if ($users->count())           
            <div class="card-body">
                <div class="btn-group float-right" role="group" aria-label="Basic example">
                    <a href="{{route('admin.users.generar_pdf')}}" class="btn btn-outline-primary btn-sm ">PDF</a>
                    <a href="{{route('admin.users.generar_xlsx')}}" class="btn btn-outline-primary btn-sm ">Excel</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="">
                                <td scope="row"> {{$user->id}} </td>
                                <td scope="row"> {{$user->name}}</td>
                                <td scope="row"> {{$user->email}}</td>
                                <td width="10px">
                                    <a class="btn btn-primary  btn-sm" href=" {{route('admin.users.edit', $user)}}" >Editar</a>
                                </td>
                                <td width="10px" >
                                    <form action=" {{route('admin.users.destroy',$user)}}" method="POST">
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
  
            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div> 
</div>
