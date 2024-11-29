<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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



// Route::get('/', function () {
//     return view('auth.login');
// });


Auth::routes();


// ================================ Bagian Akademik ================================
Route::group(['middleware' => 'auth:akademik'], function(){
    Route::get('/akademik/dashboard', [DashboardController::class, 'akademik']);
    Route::post('/akademik/gedung/{id}', [RuangController::class, 'store']);
    Route::resource('/akademik/gedung', GedungController::class);
    Route::resource('/akademik/ruang', RuangController::class);
    Route::resource('/akademik/program_studi', ProgramStudiController::class);
});

// ===================================== Dekan =====================================
Route::group(['middleware' => 'auth:dekan'], function(){
    Route::get('/dekan/dashboard', [DashboardController::class, 'dekan']);
    Route::resource('/dekan/ruang', DekanRuangController::class);
    Route::resource('/dekan/jadwal', DekanJadwalController::class);
    // Route::get('/dekan/jadwal/program_studi/{program_studi}/semester/{semester}', [DekanJadwalController::class, 'showSemester']);
    Route::get('/dekan/jadwal/mata_kuliah/{mata_kuliah}', [DekanJadwalController::class, 'showMataKuliah']);
    Route::post('/dekan/jadwal/mata_kuliah/{mata_kuliah}', [DekanJadwalController::class, 'updateStatus']);
    Route::post('/dekan/jadwal/mata_kuliah/{mata_kuliah}/updateAll', [DekanJadwalController::class, 'updateAllStatus']);

    Route::post('/dekan/jadwal/{program_studi}', [DekanJadwalController::class, 'updateStatusMk']);
    Route::post('/dekan/jadwal/{program_studi}/updateAll', [DekanJadwalController::class, 'updateAllStatusMk']);
    
    
    Route::get('/dekan/ruang/program_studi/{program_studi}', [DekanProdiController::class, 'showFromRuang']);
    Route::post('/dekan/ruang/program_studi/{program_studi}', [DekanProdiController::class, 'updateStatus']);
    Route::post('/dekan/ruang/program_studi/{program_studi}/updateAll', [DekanProdiController::class, 'updateAllStatus']);
    Route::get('/dekan/jadwal/semester/{id_program_studi}', [DekanJadwalController::class, 'getMataKuliahSemester'])->name('dekan.aturJadwal.semester');
    Route::post('/update-status/{id}', [DekanRuangController::class, 'updateStatus']);
});

// ===================================== Mahasiswa =====================================
Route::group(['middleware' => 'auth:mahasiswa'], function(){
    Route::get('/mahasiswa/dashboard', [DashboardController::class, 'mahasiswa']);
    
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
    
    // Route::get('/irs', function () {
    //     return view('mahasiswa/irs');
    // })->name('irs');

    Route::resource('/mahasiswa/irs', IRSController::class);
    
    
    Route::get('/editirs', function () {
        return view('mahasiswa/editirs');
    })->name('editirs'); // Menambahkan nama route
    
    Route::get('/cetakirs', function () {
        return view('mahasiswa/cetakirs');
    })->name('cetakirs'); // Menambahkan nama route
    
    Route::get('/khs', function () {
        return view('mahasiswa/khs');
    })->name('khs'); // Menambahkan nama routeget
    
    Route::get('/cetakkhs', function () {
        return view('mahasiswa/cetakkhs');
    })->name('cetakkhs');
    
    Route::get('/jadwal', function () {
        return view('mahasiswa/jadwal');
    })->name('jadwal');
    Route::get('/getJadwal', [IRSController::class, 'getJadwal'])->name('getJadwal');

    // Route::get('/mahasiswa/irs/mataKuliah', [IRSController::class, 'getJadwal']) -> name('mahasiswa.irs.getJadwal');
    // Route::get('/getJadwal', [IRSController::class, 'getJadwal'])->name('getJadwal');

});    



// ===================================== Kaprodi =====================================
Route::group(['middleware' => 'auth:ketua_program_studi'], function(){
    Route::get('/kaprodi/dashboard', [DashboardController::class, 'kaprodi']);
    Route::get('/kaprodi/profile', function(){
         return view('Kaprodi/profile');
    });
    
    Route::get('/kaprodi/verifikasiIRS', function(){
        return view('Kaprodi/verifikasiIRS');
    });
    
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
    
    Route::get('/kaprodi/inputMataKuliah', function () {
        return view('Kaprodi/inputMataKuliah'); // view form
    });
    // use App\Http\Controllers\KaprodiJadwalController;

// Route::get('/kaprodi/cekRuangan', [KaprodiJadwalController::class, 'cekRuangan'])->name('kaprodi.cekRuangan');

    Route::get('/kaprodi/aturJadwal/checkRuangan', [KaprodiJadwalController::class, 'checkRuangan']);
    Route::resource ('/kaprodi/mata_kuliah', MataKuliahController:: class);
    Route::post('/kaprodi/aturJadwal/storeKelas', [KaprodiJadwalController::class, 'storeKelas']) -> name('kaprodi.aturJadwal.storeKelas');
    Route::get('/kaprodi/aturJadwal/createKelas', [KaprodiJadwalController::class, 'createKelas']) -> name('kaprodi.aturJadwal.createKelas');
    Route::get('/kaprodi/aturJadwal/semester', [KaprodiJadwalController::class, 'getMataKuliahSemester']) -> name('kaprodi.aturJadwal.semester');
    Route::resource('/kaprodi/aturJadwal', KaprodiJadwalController::class);
    


    
    
});
Route::get('/', [AuthController::class, 'index']) ->name('auth.index');
Route::post('/auth/verify', [AuthController::class, 'verify']) ->name('auth.verify');


Route::get('/auth/logout', [AuthController::class, 'logout']) ->name('auth.logout');


Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard.index');
