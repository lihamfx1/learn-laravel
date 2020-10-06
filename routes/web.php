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
// default
Route::get('/', function () {
    return view('welcome');
});

// closure
// aksi yg dijalankan saat url(/) diakses
Route::get('/profile', function () {
    return 'This is my profile';
})->name('profile');

// route name
// menggunakan route name untuk mengambil url
Route::get('/tes', function () {
    return route('profile');   
});

// parameter (id)
// mengakses url secara spesifik
Route::get('/profile/{id}', function ($id) {
    return $id;
});