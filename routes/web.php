<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LokasiKostController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TenatsController;
use App\Models\Kamar;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/logout',[SesiController::class,'logout']);
Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.dashboard');

//kamar route


Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::get('/fetch-kamar-by-lokasi/{lokasiId}', 'KamarController@fetchByLokasi')->name('kamar.fetchByLokasi');
Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
Route::post('/kamar', [KamarController::class, 'store'])->name('kamar.store');
Route::get('/kamar/{id}/edit', [KamarController::class, 'edit'])->name('kamar.edit');
Route::put('/kamar/{id}', [KamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/{id}', [KamarController::class, 'destroy'])->name('kamar.destroy');




//lokasi route
Route::get('/lokasi_kos', [LokasiKostController::class, 'index'])->name('lokasi_kos.index');
Route::get('/lokasi_kos/create', [LokasiKostController::class, 'create'])->name('lokasi_kos.create');
Route::post('/lokasi_kos', [LokasiKostController::class, 'store'])->name('lokasi_kos.store');
Route::get('lokasi_kos/{id}/detail', [LokasiKostController::class, 'show'])->name('lokasi_kos.detail');
Route::delete('/lokasi_kos/{id}', [LokasiKostController::class, 'destroy'])->name('lokasi_kos.destroy');

//dashboard





