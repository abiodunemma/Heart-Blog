<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\GoogleController;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

//user
Route::get('/User/edit-profile', [App\Http\Controllers\UserController::class, 'edit'])->middleware(('auth'))->name('/User/edit-profile');
Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.goggle');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
