<?php

// use App\Models\Siswa;
use App\Models\Warga;
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

Route::get('siswa', function () {
    return Siswa::all();
});
Route::get('daftarsiswa', function () {
    return view('daftar-siswa');
});
Route::get('daftarwarga', function () {
    return view('daftar-warga');
});
Route::get('relasi-1', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->wali>nama;
});

Route::get('relasi-2', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015088')->first();

    return $mahasiswa->dosen>nama;
});


Route::get('relasi-3', function () {
    $dosen = App\Models\Dosen::where('nama', '=', 'Yulianto')->first();

    foreach ($dosen->mahasiswa as $data) {
        echo "<li>Nama : <Strong>". $data->nama . "</strong>" .$data->nim. "</li>";
    }
});






Route::get('relasi-4', function () {
    $novay = App\Models\Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    foreach ($novay->hobi as $data) {
        echo "<li>" . $data->hobi . "</li>";
    }
});

Route::get('relasi-5', function () {
    $mandi_hujan = App\Models\Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    foreach ($mandi_hujan->mahasiswa as $data) {
        echo "<li>Nama :". $data->nama . "<Strong>" .$data->nim. "</strong></li>";
    }
});

Route::get('eloquent', function () {
    # Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = App\Models\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    # Kirim variabel ke View
    return view('eloquent', compact('mahasiswa'));
});


