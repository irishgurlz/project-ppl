<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DekanRuangController;
use App\Http\Controllers\DekanJadwalController;
use App\Http\Controllers\DekanProdiController;
use App\Http\Controllers\KaprodiJadwalController;

// mahasiswa
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\IRSController;

// kaprodi
use App\Http\Controllers\MataKuliahController;



Route::get('/', function () {
    return view('login');
});

Route::get('/akademik/dashboard', function(){
    return view('Bagian Akademik/dashboard');
});

Route::get('/dekan/dashboard', function(){
    return view('Dekan/dashboard');
});

Route::get('/kaprodi/dashboard', function(){
    return view('Kaprodi/dashboard');
});

Route::get('/profile', function(){
    return view('profile');
});

// ================================ Bagian Akademik ================================
Route::post('/akademik/gedung/{id}', [RuangController::class, 'store']);
Route::resource('/akademik/gedung', GedungController::class);
Route::resource('/akademik/ruang', RuangController::class);
Route::resource('/akademik/program_studi', ProgramStudiController::class);

// ===================================== Dekan =====================================
Route::resource('/dekan/ruang', DekanRuangController::class);
Route::resource('/dekan/jadwal', DekanJadwalController::class);
// Route::get('/dekan/jadwal/program_studi/{program_studi}/semester/{semester}', [DekanJadwalController::class, 'showSemester']);
Route::get('/dekan/jadwal/program_studi/semester', [DekanJadwalController::class, 'showSemester']);
Route::get('/dekan/ruang/program_studi/{program_studi}', [DekanProdiController::class, 'showFromRuang']);
Route::post('/dekan/ruang/program_studi/{program_studi}', [DekanProdiController::class, 'updateStatus']);
Route::post('/dekan/ruang/program_studi/{program_studi}/updateAll', [DekanProdiController::class, 'updateAllStatus']);

Route::get('/dekan/jadwal/program_studi/{program_studi}', [DekanProdiController::class, 'showFromJadwal']);

Auth::routes();
Route::post('/update-status/{id}', [DekanRuangController::class, 'updateStatus']);



// ===================================== Mahasiswa =====================================
Route::get('dashboard', function(){
    return view('mahasiswa/dashboard');
});

Route::get('/alokasi', function(){
    return view('mahasiswa/alokasi');
});

Route::get('/notifikasi', function(){
    return view('mahasiswa/notifikasi');
});

Route::get('/registrasiakademik', function(){
    return view('mahasiswa/registrasiakademik');
});

Route::get('/profile', function () {
    return view('mahasiswa/profile');
})->name('profile'); // Menambahkan nama route

Route::get('/editprofil', function () {
    return view('mahasiswa/editprofil');
})->name('editprofil'); // Menambahkan nama route

Route::get('/irs', function () {
    return view('mahasiswa/irs');
})->name('irs'); // Menambahkan nama route

Route::resource('/mahasiswa/irs', IRSController::class);


Route::get('/editirs', function () {
    return view('mahasiswa/editirs');
})->name('editirs'); // Menambahkan nama route

Route::get('/cetakirs', function () {
    return view('mahasiswa/cetakirs');
})->name('cetakirs'); // Menambahkan nama route

Route::get('/khs', function () {
    return view('mahasiswa/khs');
})->name('khs'); // Menambahkan nama route

Route::get('/cetakkhs', function () {
    return view('mahasiswa/cetakkhs');
})->name('cetakkhs');

Route::get('/jadwal', function () {
    return view('mahasiswa/jadwal');
})->name('jadwal');




// ===================================== Kaprodi =====================================
Route::get('/kaprodi/dashboard', function(){
    return view('Kaprodi/dashboard');
});

Route::get('/kaprodi/profile', function(){
     return view('Kaprodi/profile');
});

Route::get('/kaprodi/verifikasiIRS', function(){
    return view('Kaprodi/verifikasiIRS');
});

// Route::get('/kaprodi/aturJadwal', function(){
//     return view('Kaprodi/aturJadwal');
// });


Route::get('/kaprodi/semester1', function () {
    return view('Kaprodi/semester1'); // Nama view yang akan ditampilkan
});

Route::get('/editAturJadwal1', function () {
    return view('Kaprodi/editAturJadwal1'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/editAturJadwal2', function () {
    return view('Kaprodi/editAturJadwal2'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/editProfil', function () {
    return view('Kaprodi/editProfil'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/verifikasiIRS1', function () {
    return view('Kaprodi/verifikasiIRS1'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/detailsaturJadwal', function () {
    return view('Kaprodi/detailsaturJadwal'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/editKelas', function () {
    return view('Kaprodi/editKelas'); // Nama view yang akan ditampilkan
});

Route::get('/kaprodi/tambahKelas', function () {
    return view('Kaprodi/tambahKelas'); // Nama view yang akan ditampilkan
});

// Route::get('/kaprodi/inputMatakuliah1', function(){
//     return view('Kaprodi/inputMatakuliah1/');
// });

Route::get('/kaprodi/inputMataKuliah', function () {
    return view('Kaprodi/inputMataKuliah'); // view form
});

//Bagian Kaprodi
Route::resource ('/kaprodi/mata_kuliah', MataKuliahController:: class);

// ===================================== Kaprodi =====================================
Route::resource('/kaprodi/aturJadwal', KaprodiJadwalController::class);