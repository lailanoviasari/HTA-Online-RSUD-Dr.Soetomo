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

Route::get('/dev', function () {
    return view('dev', [
        // digunakan untuk memasukkan data dari route ke suatu file sesuai dengan view yang dituju
        'title' => 'Dev',
        'name' => 'Laila Novia Sari',
        'NIM' => '20051204013',
        'job' => 'Programmer',
        'company' => 'Universitas Negeri Surabaya',
        'address' => 'Krian - Sidoarjo',
        'hobi' => 'Nge drakor hahaha'
    ]);
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/', function () {
    return view('HTA-content');
});

Route::get('/HTA-belumDirekomendasikan', function () {
    return view('HTA-belumDirekomendasikan');
});

Route::get('/HTA-Direkomendasikan', function () {
    return view('HTA-Direkomendasikan');
});

Route::get('/HTA-Ditolak', function () {
    return view('HTA-Ditolak');
});

Route::get('/HTA-RevisiDokumenPPK', function () {
    return view('RevisiDokumenPPK.revisiDokumenPPK');
});
