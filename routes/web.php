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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home-form', [App\Http\Controllers\encryptController::class, 'showForm'])->name('form.show');
Route::post('/encrypted-value',[App\Http\Controllers\encryptController::class, 'store']) ->name('post.add');
Route::view('/submit','form');
