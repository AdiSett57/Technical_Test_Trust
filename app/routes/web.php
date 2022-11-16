<?php

use App\Http\Controllers\MasterDokterController;
use App\Http\Controllers\MasterJadwalController;
use App\Http\Controllers\MasterUnitController;
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
    return view('home', [
        'page' => 'Home'
    ]);
});

Route::resources([
    '/data-dokter' => MasterDokterController::class,
    '/data-unit' => MasterUnitController::class,
    '/data-jadwal' => MasterJadwalController::class,
]);


Route::get('/laporan', 'App\Http\Controllers\MasterJadwalController@lihat');
Route::get('/exportlaporan', 'App\Http\Controllers\MasterJadwalController@cetak');



