<?php

use App\Http\Controllers\AuthController;
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
    return view('index');
});

// AUTHENTICATION
Route::prefix('auth')->group(function () {
    Route::post('/login',[AuthController::class, 'login'])->name('login');
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/register',[AuthController::class, 'register'])->name('register');
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

Route::middleware('')

Route::get('/halaman-search-admin', function () {
    return view('halaman-search-admin');
})->name('halaman-search-admin');

Route::get('/halaman-detail', function () {
    return view('halaman-detail');
});

Route::get('/halaman-detail-report', function () {
    return view('/halaman-detail-report');
})->name('detailReport');

Route::get('/halaman-detail-photo', function () {
    return view('/halaman-detail-photo');
})->name('detailPhoto');

Route::get('/halaman-search-gudang', function () {
    return view('/halaman-search-gudang');
});

Route::get('/halaman-tambah-data-customer', function () {
    return view('/halaman-tambah-data-customer');
})->name('dataCustomer');


Route::get('/halaman-tambah-data-container', function () {
    return view('/halaman-tambah-data-container');
})->name('dataContainer');

Route::get('/halaman-tambah-data-report', function () {
    return view('/halaman-tambah-data-report');
})->name('dataReport');
