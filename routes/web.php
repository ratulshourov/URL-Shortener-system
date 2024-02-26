<?php

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
use App\Http\Controllers\UrlController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-new-url', [UrlController::class, 'create'])->name('add-new-url');
Route::get('/all-url', [UrlController::class, 'index'])->name('all-url');
Route::post('/shorten', [UrlController::class, 'store'])->name('shorten');
Route::get('/{shortUrl}', [UrlController::class, 'redirectToOriginal'])->name('shorten.redirect');