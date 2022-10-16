<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\WisataController;
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



Route::get('/', [IndexController::class, 'index']);
Route::get('wisata/{slug}', [WisataController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['mitra'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('add-wisata', [WisataController::class, 'index']);
        Route::post('wisata', [WisataController::class, 'store']);
        Route::get('selectProv', [WisataController::class, 'provinsi'])->name('provinsi.index');
        Route::get('selectRegenc/{id}', [WisataController::class, 'regency']);
    });
});

require __DIR__ . '/auth.php';
