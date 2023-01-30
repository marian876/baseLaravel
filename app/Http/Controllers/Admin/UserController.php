<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index','generar_pdf');
        $this->middleware('can:admin.users.edit')->only('edit','update');
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function edit(User $user)
    {
        $roles=Role::all();
        return view ('admin.users.edit',compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user)->with('info', 'Se asignaron los roles correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info','El usuario se eliminó con exito');
    }

    public function generar_pdf()
    {
        $users=User::all();
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif','debugLayoutLines : verdadero']);
        $pdf=Pdf::loadView('admin.users.generar_pdf',compact('users'));
        return $pdf
            ->setPaper('a4')
            ->download ('usuarios.pdf');
    }
    
    public function generar_xlsx()
    {
        
        return Excel::download(new UsersExport,'Usuarios.xlsx');
    }

    public function graficar()
    {
        $chart_options = [
            'chart_title' => 'Usuarios creados por mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];
        $chart = new LaravelChart($chart_options);

        return view('admin.users.chart', compact('chart'));
    }
}
