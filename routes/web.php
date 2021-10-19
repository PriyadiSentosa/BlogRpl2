<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('latihan-controller',
    [MyController::class, 'latihan']);


Route::get('bio', [MyController::class, 'bio']);

Route::get('barang', [MyController::class, 'barang']);

Route::get('pesanan', [MyController::class, 'pesanan']);

Route::get('pembelian', [MyController::class, 'pembelian']);

Route::get('pembeli', [MyController::class, 'pembeli']);

Route::get('suplier', [MyController::class, 'suplier']);
