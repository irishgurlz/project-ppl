<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editKelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        .custom-card {
            background-color: #775E90; /* Warna latar form */
            min-height: 60vh; /* Tinggi minimum 150% dari tinggi layar */
            width: 60vw; /* Membuat latar belakang mencakup seluruh lebar layar */
            margin: 0;
            padding-bottom: 50px; /* Tambahkan ruang di bagian bawah */
            padding-top: 20px;
            padding-left: 20px;
            border-radius: 15px; /* Membuat sudut membulat */
        }

        .custom-card label {
            color: white; /* Warna label */
        }

        .custom-btn {
            width: 100px;
        }

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

        <!-- Kolom 3 -->
        <div class="white-bg">
        <div class="container my-5">
            <h3 class="text-center mb-4">Edit Kelas</h3>
            <div class="d-flex justify-content-center">
                <div class="custom-card shadow-lg">
        <!-- Main content Inputan -->
        <form>
        <div class="row mb-3 align-items-center">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <label for="selectDay" class="col-sm-2 col-form-label" style="white-space: nowrap;">Hari</label>
            <div class="col-sm-10">
                <select class="form-select" id="selectDay" aria-label="Pilih Hari">
                    <option value="" disabled selected>-- Pilih Hari --</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
            <div class="col-sm-10">
            <input type="time" class="form-control" id="waktu">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <label for="jenisMataKuliah" class="col-sm-2 col-form-label">Kuota</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="jenisMataKuliah">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <label for="inputRuang" class="col-sm-2 col-form-label">Ruang</label>
            <div class="col-sm-10">
            <select class="form-select" id="inputRuang">
                <option selected>-- Pilih Ruang --</option>
                <option value="101">101</option>
                <option value="102">102</option>
                <option value="103">103</option>
                <option value="104">104</option>
        </select>
        </div>
        </div>

        <div class="d-flex justify-content-center  ">
            <button type="reset" class="btn btn-danger custom-btn me-2">Cancel</button>
            <a href="/inputMataKuliah1" class="btn btn-primary custom-btn">Tambah</a>
        </div>
        </form>

                        