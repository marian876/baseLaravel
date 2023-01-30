<!DOCTYPE html>
<html lang="es">
    
<style>
    h1{
    text-align: center;
    text-transform: uppercase;
    }
    table {
    width: 100%;
    }
    th,td{
        text-align: center;
        vertical-align: top;
        padding: 0.3em;
        caption-side: bottom;
    }
    td {
        text-align: left;
        vertical-align: top;
        padding: 0.3em;
        caption-side: bottom;
        border-style: solid;
        border-color: #cccccc;
        border-width: 1px;
        border-collapse: collapse;
    }
    th {
    background: rgb(159, 162, 162);
    }
</style>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>

    </head>
    <body>
        <h1>Listado de usuarios</h1>
        <table style="border-collapse: collapse" bordercolor="#000" width="500">
            <thead>
                <tr>
                    <th style="width:5%" >Id</th>
                    <th >Nombre</th>
                    <th >Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}}</td>
                        <td> {{$user->email}}</td>
                    </tr>                  
                @endforeach
            </tbody>
        </table>
    </body>

    <footer>
        <h1>Empresa</h1>
    </footer>
</html>


