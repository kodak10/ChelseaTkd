<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PratiquantController;




Route::get('/', function () {
    return view('dashboard.home');
});

Route::resource('/pratiquant', PratiquantController::class);

Route::get('/passage', function () {
    return view('dashboard.passage_grade.index');
});


Route::get('/search_numero_passport', function () {
    return view('search_garde');
});

Route::get('/search_name', function () {
    return view('search_garde_name');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
