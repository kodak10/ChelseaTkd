<?php

use App\Models\Pratiquant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PratiquantController;

Route::get('/', function () {
    return view('dashboard.home');
});


Route::resource('pratiquants', PratiquantController::class);







//Auth::routes();

//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
