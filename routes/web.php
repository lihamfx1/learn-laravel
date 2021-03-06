<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
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

// Route::get('/siswa', 'SiswaController@index');

// controller
// mengakses controller
Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/tambah',[SiswaController::class, 'create']);
Route::post('siswa', [SiswaController::class, 'store']);

// resource
// Route::resource('siswa', SiswaController::class)->only(['index', 'create', 'store']);