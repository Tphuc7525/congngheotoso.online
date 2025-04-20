<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/', function(){
    return view('welcome');
});

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::post('login',[AutherController::class,'login'])->name('auth.login');