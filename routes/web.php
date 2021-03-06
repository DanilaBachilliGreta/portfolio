<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/mentions_legales', function () {
    return view('mentions/mentions_legales');
})->name('mentions_legales');

//Route::get('/contact', [ContactController::class,'contact']);
Route::post('/contact', [ContactController::class,'confirm']);


Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');





// Méthode fallback() en dernière position
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });