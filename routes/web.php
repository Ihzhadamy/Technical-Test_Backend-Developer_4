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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/prepaid-balance', 'App\Http\Controllers\PrepaidController@index')->middleware(['auth'])->name('prepaid-balance');

Route::get('/product-page', function(){
    return view('product-page');
})->middleware(['auth'])->name('product-page');

Route::get('/order', 'App\Http\Controllers\OrderController@index')->middleware(['auth'])->name('order');

require __DIR__.'/auth.php';
