<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BancoController;
use App\Http\Controllers\Admin\TerminadoController;
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\EstudioController;

Route::get('/admin',[HomeController::class,'index'])
//->middleware('can:admin.home')
->name('admin.home');
Route::resource('estudios', EstudioController::class)
//->except("show")
->names('admin.estudios');
Route::resource('bancos', BancoController::class)
//->except("show")
->names('admin.bancos');
Route::resource('departamentos', DepartamentoController::class)
//->except("show")
->names('admin.departamentos');

Route::resource('terminados', TerminadoController::class)
//->except("show")
->names('admin.terminados');
Route::resource('roles', RoleController::class)->except("show")->names('admin.roles');
Route::resource('users', UserController::class)->only('index','edit','update')->names('admin.users');
