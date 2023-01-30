<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog as Log;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class AuthenticationLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.categories.index')->only('index');
 
    }
    public function index()
    {
        $logs=Log::all();
        return view('admin.logs.index',compact('logs'));
    }

    public function graficar()
    {
        $chart_options = [
            'chart_title' => 'Ingreso de usuarios por día',
            'report_type' => 'group_by_date',
            'model' => 'Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog',
            'group_by_field' => 'login_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
        ];
        $chart = new LaravelChart($chart_options);

        return view('admin.users.chart', compact('chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
