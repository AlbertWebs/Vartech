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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/services/{slung}', [App\Http\Controllers\HomeController::class, 'services'])->name('excellences');
Route::get('/location-and-networks/{slung}', [App\Http\Controllers\HomeController::class, 'location'])->name('location-and-networks');
Route::get('/why-pr', [App\Http\Controllers\HomeController::class, 'why'])->name('why');

