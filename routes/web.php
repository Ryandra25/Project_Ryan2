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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $Nama = "Ryandra";
    $Jk = "Laki - Laki";
    $PendidikanTerakhir = "SMK";
    $Pekerjaan = "Konveksi";
    $Alamat = "Cangkuang Kulon";
    return view('data_diri', compact('Nama', 'Jk', 'PendidikanTerakhir', 'Pekerjaan', 'Alamat'));
});

Route::get('/Biodata', function () {
    $Nama1 = "Rehan";
    $Jk1 = "Laki - Laki";
    $PendidikanTerakhir1 = "SMK";
    $Pekerjaan1 = "Barista";
    $Alamat1 = "TCI II";
    return view('biodata', compact('Nama1', 'Jk1', 'PendidikanTerakhir1', 'Pekerjaan1', 'Alamat1'));
});

Route::get('/Biodata/{Nama}/{Jk}/{PT}/{P}/{alamat}', function (Request $request, $Nama, $Jk, $PT, $P, $alamat) {
    $Nama2 = $Nama;
    $Jk2 = $Jk;
    $PendidikanTerakhir2 = $PT;
    $Pekerjaan2 = $P;
    $Alamat2 = $alamat;
    return view('biodata2', compact('Nama2', 'Jk2', 'PT', 'P', 'Alamat2'));
});



