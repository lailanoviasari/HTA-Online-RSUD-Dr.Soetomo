<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HTA-InformasiPengajuan');
});

Route::get('/pengajuanVK', function () {
    return view('HTA-InformasiPengajuan');
});

Route::get('/pengajuanVK/blm-diverifikasi', function () {
    return view('HTA-BelumDirekomendasikan');
});

Route::get('/pengajuanVK/direkomendasikan', function () {
    return view('HTA-Direkomendasikan');
});

Route::get('/pengajuanVK/ditolak', function () {
    return view('HTA-Ditolak');
});

Route::get('/revisiPPK', function () {
    return view('RevisiDokumenPPK.HTA-revisiDokumenPPK');
});
