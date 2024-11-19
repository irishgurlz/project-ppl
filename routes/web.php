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

// ===================================== Kaprodi =====================================
Route::resource('/kaprodi/jadwal', KaprodiJadwalController::class);
