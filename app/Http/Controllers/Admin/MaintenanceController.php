<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('admin.maintenance.index');
    }

    protected function backup()
    {
/*         Artisan::call('backup:run',[
            '--only-db'=>true
        ]); */

        Artisan::call('db:backup',['mysql'.'C:/xampp/mysql/bin/']);
        return view('admin.maintenance.index');

    }

}
