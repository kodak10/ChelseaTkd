<?php

use App\Models\Pratiquant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PratiquantController;

Route::get('/', function () {
    return view('dashboard.home');
});


Route::resource('pratiquants', PratiquantController::class);


Route::get('/print_card', [PratiquantController::class, 'pageListPratiquant'])->name('list_pratiquants');
Route::post('/print_card', [PratiquantController::class, 'generateCardImpression'])->name('print');







//Auth::routes();

//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
