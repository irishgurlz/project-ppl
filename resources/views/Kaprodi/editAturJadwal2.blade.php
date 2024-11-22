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
</head>
<body>
<main class="container-fluid my-0 p-0"> 
    <div class="row g-0">
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("partial.Sidebar");
        </div>
        <div class="col-10 p-4 d-flex flex-column"> <!-- Gunakan flexbox untuk membuat layout column -->
            <h3 class="text-primary-emphasis">Atur Jadwal Kuliah</h3>

            <div class="container-fluid mt-3 flex-grow-1 d-flex"> <!-- Atur card untuk memenuhi tinggi -->
                <div class="card w-100 d-flex flex-column" style="height: 100%;"> <!-- Membuat card full tinggi -->
                    <h4 class="p-4 text-primary-emphasis"><strong>Pengisian Data Mata Kuliah</strong></h4>
                    <div class="table-responsive flex-grow-1 p-2"> <!-- Agar tabel bisa stretch dengan card -->
                        <table class="table table-striped table-bordered text-center">
  
  <form>
  <div class="row mb-3 align-items-center">
    <label for="inputMataKuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
    <div class="col-sm-10">
      <select class="form-select custom-dropdown" id="inputMataKuliah">
        <option selected>Pilih Mata Kuliah</option>
        <option value="matematika">Matematika 1</option>
        <option value="fisika">Aljabar Linear</option>
        <option value="kimia">Dasar Pemrograman</option>
        <option value="biologi">Dasar Sistem</S></option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
      </select>
    </div>
  </div>

  <div class="row mb-3 align-items-center">
    <label for="inputPassword3" class="col-sm-2 col-form-label style= white-space: nowrap;">Tanggal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3 align-items-center">
    <label for="sks" class="col-sm-2 col-form-label">Ruangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sks">
    </div>
  </div>
  <div class="row mb-3 align-items-center">
    <label for="jenisMataKuliah" class="col-sm-2 col-form-label">Jam Mulai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jenisMataKuliah">
    </div>
  </div>
  <div class="row mb-3 align-items-center">
    <label for="inputMataKuliah" class="col-sm-2 col-form-label">Pengampu</label>
    <div class="col-sm-10">
      <select class="form-select custom-dropdown" id="inputMataKuliah">
        <option selected>Pilih Pengampu</option>
        <option value="matematika">Sandy Kurniawan, S.Kom., M.Kom.</option>
        <option value="fisika">Dinar Mutiara Kusumo Nugraheni, S.T., M.InfoTech.(Comp), Ph.D.</option>
        <option value="kimia">Yunila Dwi Putri Ariyanti, S.Kom., M.Kom.</option>
        <option value="biologi">Dr. Retno Kusumaningrum, S.Si., M.Kom.</S></option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
      </select>
    </div>
  </div>
  </div>
  <div class="d-flex justify-content-center  ">
    <button type="reset" class="btn btn-danger custom-btn me-2">Cancel</button>
    <button type="submit" class="btn btn-primary custom-btn">Tambah</button>
  </div>
</form>