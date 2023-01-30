<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('admin.users.generar_xlsx',[
            'users'=>User::all()
        ]);

    }
}
