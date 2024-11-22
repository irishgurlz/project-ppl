<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifikasiIRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        

        body {
          background-color: #f0f4ff; /* Warna background biru */
          min-height: 100vh; /* Tinggi minimum 100% dari tinggi layar */
          width: 100%; /* Membuat latar belakang mencakup seluruh lebar layar */
          margin: 0;
          padding-bottom: 100px; /* Tambahkan ruang di bagian bawah */
        }
    </style>
</head>
<body>
<main class="container-fluid my-0 p-0"> 
    <div class="row g-0">
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("partial.Sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Atur Jadwal </p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
         

            <div class="container-fluid mt-3 flex-grow-1 d-flex"> <!-- Atur card untuk memenuhi tinggi -->
                <div class="card w-100 d-flex flex-column" style="height: 100%;"> <!-- Membuat card full tinggi -->
                    <h4 class="p-4 text-primary-emphasis"><strong>Daftar Angkatan</strong></h4>
                    <div class="table-responsive flex-grow-1 p-2"> <!-- Agar tabel bisa stretch dengan card -->
                        <table class="table table-striped table-bordered text-center">
                            <thead>

                            <div class="container-fluid mt-3 d-flex flex-column align-items-center">
    

                            <div class="card shadow-lg p-5 mb-4" style="width: 70%; background-color: #f5f5ff; border-radius: 20px;">
        <div class="d-flex justify-content-around">
            <!-- Jumlah Siswa yang Sudah Verifikasi -->
            <div class="text-center" style="width: 45%;">
                <h5 class="text-muted">Siswa yang sudah verifikasi</h5>
                <h2 id="verifiedCount" class="text-muted" style="font-size: 3rem;">67</h2>
            </div>

            <!-- Jumlah Siswa yang Belum Verifikasi -->
            <div class="text-center" style="width: 45%;">
                <h5 class="text-muted">Siswa yang belum verifikasi</h5>
                <h2 id="unverifiedCount" class="text-muted" style="font-size: 3rem;">100</h2>
            </div>
        </div>
    </div>
</div>