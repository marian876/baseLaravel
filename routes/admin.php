<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\AuthenticationLogController;
use App\Http\Controllers\Admin\MaintenanceController;


Route::get('',[HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('users',UserController::class)->except('show')->names('admin.users');
Route::get('generar_pdf',[UserController::class,'generar_pdf'])->name('admin.users.generar_pdf');
Route::get('generar_xlsx',[UserController::class,'generar_xlsx'])->name('admin.users.generar_xlsx');
Route::get('graficar_user',[UserController::class,'graficar'])->name('admin.users.graficar_user');

Route::resource('roles',RoleController::class)->names('admin.roles');

Route::resource('sessions',SessionController::class)->names('admin.sessions');

Route::resource('logs',AuthenticationLogController::class)->names('admin.logs');
Route::get('graficar_auth',[AuthenticationLogController::class,'graficar'])->name('admin.logs.graficar_auth');

Route::resource('maintenance',MaintenanceController::class)->names('admin.maintenance');
Route::get('seguridad',[MaintenanceController::class,'backup'])->name('admin.maintenance.backup');

