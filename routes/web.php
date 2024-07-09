<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Models\detailCustomer;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
})->name('index');

// AUTHENTICATION
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/login', function () {
        return view('admin.gudang.login');
    })->name('login');

    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/register', function () {
        return view('admin.gudang.register');
    })->name('register');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    Route::get('/logout', function () {
        abort(403);
    });
});


// ADMIN GUDANG
Route::prefix('adminGudang')->middleware('auth')->group(function () {
    Route::get('/halaman-search-gudang', [AdminController::class, 'showDataContainer'])->name('dashboardGudang');

    Route::get('/{id}/halaman-tambah-data-customer', function (Request $request) {
        return view('admin.gudang.halaman-tambah-data-customer', [ 'id' => $request->id ]);
    })->name('dataCustomer');

    Route::get('/{idContainer}/halaman-edit-data-customer/{id}', function (Request $request) {
        $data = detailCustomer::find($request->id);
        return view('admin.gudang.halaman-edit-data-customer', [
            'id' => $request->id,
        ])->with('data', $data);
    })->name('editCustomer');

    Route::post('/{id}/halaman-tambah-data-customer', [
        AdminController::class,
        'addDataCustomer'
    ])->name('dataCustomer');

    Route::get('/{id}/halaman-tambah-data-container', function (Request $request) {
        return view('admin.gudang.halaman-tambah-data-container', [ 'id' => $request->id ]);
    })->name('dataContainer');
    Route::post('/{id}/halaman-tambah-data-container', [AdminController::class, 'addDataContainer'])->name('dataContainer');

    Route::get('/{id}/halaman-tambah-data-report', [AdminController::class, 'showdatacustomer'])->name('dataReport');

    Route::post('/{id}/halaman-tambah-data-report', [AdminController::class, 'deleteCustomer'])->name('deleteCustomer');
});


// ADMIN GATEWAY
Route::prefix('adminGateway')->group(function () {
    Route::get('/halaman-search-admin', [AdminController::class, 'showSearchAdmin'])->name('halaman-search-admin');
    Route::post('/halaman-search-admin', [AdminController::class, 'showSearchAdmin'])->name('halaman-search-admin');

    // Route::post('/halaman-tambah-data-container', [])->name('dataContainer');
    Route::get('/{id}/halaman-detail', [AdminController::class, 'showDetail'])->name('customerDetail');

    Route::get('/{id}/halaman-detail-report', [AdminController::class, 'showReport'])->name('detailReport');

    Route::get('/{id}/halaman-detail-photo', [AdminController::class, 'showPhotos'])->name('detailPhoto');
});
