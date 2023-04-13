<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/inscription', function () {
    return view('dashboard.pratiquants.index');
});

Route::get('/create', function () {
    return view('dashboard.pratiquants.create');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
