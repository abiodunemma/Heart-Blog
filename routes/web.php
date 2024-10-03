<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

//user
Route::get('/User/edit-profile', [App\Http\Controllers\UserController::class, 'edit'])->middleware(('auth'))->name('/User/edit-profile');
Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
