<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\GoogleController;
use Illuminate\Support\Facades\FrontController;
use App\Models\User;



Route::get('/', function () {
    return view('welcome');
});

// home page functionality
Route::get('/Upload/home', [App\Http\Controllers\FrontController::class, 'front'])->middleware(('auth'))->name('/Upload/home');
Route::get('/Upload/upload', [App\Http\Controllers\FrontController::class, 'upload'])->middleware(('auth'))->name('/Upload/upload');




//userkyc
Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('/User/edit-profile/{id}', [App\Http\Controllers\UserController::class, 'editprofile'])->middleware(('auth'));
Route::get('/User/edit-profile', [App\Http\Controllers\UserController::class, 'profile'])->middleware(('auth'))->name('/User/edit-profile');
Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');

//Route::post('/User/update', [App\Http\Controllers\UserController::class, 'update'])->name('User.update');


// user

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.goggle');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');


