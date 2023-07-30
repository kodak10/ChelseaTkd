<?php

use App\Http\Controllers\ArticlesController;
use App\Models\Pratiquant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PratiquantController;

Route::get('/', function () {
    return view('index');
});

Route::resource('pratiquants', PratiquantController::class);
Route::resource('article', ArticlesController::class);

Route::get('/print_card', [PratiquantController::class, 'pageListPratiquant'])->name('list_pratiquants');
Route::post('/print_card', [PratiquantController::class, 'generateCardImpression'])->name('print');
Route::post('/passage_grade', [PratiquantController::class, 'passage_de_grade']);


Route::get('/search/name', function(){
    return view('parcours.nom');
});
Route::get('/search/passeport', function(){
    return view('parcours.passport');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


?>