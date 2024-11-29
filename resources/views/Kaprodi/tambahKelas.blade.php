<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahKelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        .custom-card {
            background-color: #775E90; /* Warna latar form */
            height: auto; /* Tinggi minimum 150% dari tinggi layar */
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
            @include("Kaprodi.partial.Sidebar");
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
        <div class="container mb-5">
            <h3 class="text-center mb-4">Tambah kelas</h3>
            <div class="d-flex justify-content-center">
                <div class="custom-card shadow-lg">
        <!-- Main content Inputan -->

        <form action="/kaprodi/aturJadwal/" method="post">
            @csrf
            <div class="mb-3" style="display: none;">
                <input type="hidden" name="kodemk" id="kodemk" value="{{ $mata_kuliah->kodemk }}">
                
            </div>
        
            <!-- Jenis Semester -->
            <div class="row mb-3 align-items-center">
                <label for="jenis_semester" class="col-sm-2 col-form-label">Jenis Semester</label>
                <div class="col-sm-10">
                    <select name="jenis_semester" class="form-select" id="jenis_semester">
                        <option value="" disabled selected>--Pilih Jenis--</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                    @error('jenis_semester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
        
            <!-- Kelas Matkul -->
            <div class="row mb-3 align-items-center">
                <label for="kelas_matkul" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" name="kelas_matkul" class="form-control" id="kelas_matkul" placeholder="Masukkan hanya huruf">
                    @error('kelas_matkul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Hari -->
            <div class="row mb-3 align-items-center">
                <label for="selectDay" class="col-sm-2 col-form-label">Hari</label>
                <div class="col-sm-10">
                    <select name="hari" class="form-select" id="selectDay">
                        <option value="" disabled selected>--Pilih Hari--</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                    @error('hari')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
           <!-- SKS (Credit Hours) - Automatically filled -->
            <div class="row mb-3 align-items-center">
                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <!-- Display SKS value from mata_kuliah -->
                    <input type="text" class="form-control" id="sks" value="{{ $mata_kuliah->sks }}" readonly>
                </div>
            </div>

            <!-- Waktu -->
            <div class="row mb-3 d-flex justify-content-between">
                {{-- <div style="width:50%"> --}}
                    <div class="d-flex justify-content-between"  style="width:58%">
                        <label for="jam_mulai" class="" >Waktu Mulai</label>
                        <input type="time" name="jam_mulai" class="form-control" id="jam_mulai" onchange="calculateEndTime()" style="width:70%;">
                        @error('jam_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                {{-- </div> --}}

                {{-- <div style="width: 50%">                     --}}
                    <div class="d-flex justify-content-between" style="width:42%">
                        <label for="jam_selesai" class="">Waktu Selesai</label>
                        <input type="text" name="jam_selesai" class="form-control" id="jam_selesai" style="width:70%" readonly>
                    </div>
                {{-- </div> --}}
            </div>


            {{-- </div> --}}
        
            <!-- Kuota -->
            <div class="row mb-3 align-items-center">
                <label for="kuota" class="col-sm-2 col-form-label">Kuota</label>
                <div class="col-sm-10">
                    <input type="number" name="kuota" class="form-control" id="kuota" min="1">
                    @error('kuota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Ruang -->
            <div class="row mb-3 align-items-center">
                <label for="id_ruang" class="col-sm-2 col-form-label">Ruang</label>
                <div class="col-sm-10">
                    <select name="id_ruang" class="form-select" id="id_ruang">
                        <option value="" disabled selected>--Pilih Ruang--</option>
                        @forelse ($ruang as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_ruang }}</option>
                        @empty
                            <option value="">Tidak Ada Ruang</option>
                        @endforelse
                    </select>
                    @error('id_ruang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div style="" id="ruangStatus" class="mt-2"></div>
                </div>

            </div>
        
            <!-- Submit Button -->
            <div class="d-flex justify-content-center mt-3">
                <a href="/akademik/program_studi" class="btn btn-cancel" style="width:25%;">Cancel</a>
                <button type="submit" class="btn btn-add ms-1" style="width:25%;">Add</button>
            </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#jam_mulai, #id_ruang, #selectDay').on('change', function () {
                        let ruangId = $('#id_ruang').val();
                        let hari = $('#selectDay').val();
                        let jamMulai = $('#jam_mulai').val();
                        let jamSelesai = $('#jam_selesai').val();
            
                        if (ruangId && hari && jamMulai) {
                            $.ajax({
                                url: '/kaprodi/aturJadwal/checkRuangan',
                                method: 'GET',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    id_ruang: ruangId,
                                    hari: hari,
                                    jam_mulai: jamMulai,
                                    jam_selesai: jamSelesai,
                                },
                                success: function (response) {
                                    let ruangStatus = $('#ruangStatus');
                                    if (response.status === 'occupied') {
                                        ruangStatus.html('<div class="alert alert-danger">' + response.message + '</div>');
                                    } else if (response.status === 'available') {
                                        ruangStatus.html('<div class="alert alert-success">' + response.message + '</div>');
                                    }
                                },
                                error: function (xhr, status, error) {
                                    console.error(xhr.responseText);
                                    $('#ruangStatus').html('<div class="alert alert-warning">Terjadi kesalahan, silakan coba lagi.</div>');
                                }
                            });
                        } else {
                            $('#ruangStatus').html('');
                        }
                    });
                });

                function calculateEndTime() {
                    var jamMulai = document.getElementById('jam_mulai').value;
                    var sks = parseInt(document.getElementById('sks').value);
                    if (jamMulai && sks > 0) {
                        var startTime = jamMulai.split(':');
                        var startMinutes = parseInt(startTime[0]) * 60 + parseInt(startTime[1]);
                        var duration = sks * 50;
                        var endMinutes = startMinutes + duration;

                        var hours = Math.floor(endMinutes / 60);
                        var minutes = endMinutes % 60;

                        var endTime = String(hours).padStart(2, '0') + ':' + String(minutes).padStart(2, '0');

                        document.getElementById('jam_selesai').value = endTime;
                    }
                }

                function showJamSelesai() {
                    const jamMulai = document.getElementById('jam_mulai').value;
                    const sks = {{ $mata_kuliah->sks }}; 

                    if (jamMulai) {
                        const startTime = new Date("1970-01-01T" + jamMulai + "Z");
                        startTime.setHours(startTime.getHours() + sks);
                        const hours = startTime.getHours().toString().padStart(2, '0');
                        const minutes = startTime.getMinutes().toString().padStart(2, '0');
                        const jamSelesai = hours + ':' + minutes;
                        document.getElementById('jam_selesai').value = jamSelesai;
                    }
                }

            </script>
            