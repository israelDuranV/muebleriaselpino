<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BancoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;


Route::get('/admin',[HomeController::class,'index'])
//->middleware('can:admin.home')
->name('admin.home');
Route::resource('users', UserController::class)
//->only('index','edit','update')
->names('admin.users');
Route::resource('bancos', BancoController::class)
//->except("show")
->names('admin.bancos');
