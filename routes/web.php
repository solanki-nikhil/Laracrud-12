<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create'])->name('user.create');
