<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .content-container {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            width: 1350px;
            height: 730px;
        }

        .main-heading {
            border-bottom: 2px;
            padding-bottom: 10px;
            color: #353E6C;
        }

        .status-container {
            display: flex;
            gap: 20px;
        }

        .status-card {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 15px;
            flex: 1;
            display: flex;
            align-items: center;
            transition: transform 0.2s;
        }

        .status-icon {
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }

        .status-text {
            flex: 1;
        }

        .status-text h5 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .status-text p {
            font-size: 18px;
            margin: 0;
        }

        .divider {
            border-top: 1px solid #9E9E9E;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .btn-status-selected {
            background-color: #1D3589;
            color: white;
            margin-top: 10px;
        }


        .btn-status-disabled {
            background-color: #6c757d;
            color: white;
            margin-top: 10px;
            cursor: not-allowed;
        }

        .info-box {
            background-color: #f1f1f1;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
            font-size: 18px;
        }
        .bayar-box {
            background-color: #f1f1f1;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
            font-size: 18px;
            width: 300px;
        }
        .bayar-box p{
            margin-bottom: 10px;

        }

        .bayar-button {
            background-color: #35DA81;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: not-allowed; /* Menampilkan kursor yang menunjukkan tombol tidak bisa diklik */
            pointer-events: none; /* Menonaktifkan interaksi dengan tombol */
        }

        .profile-picture {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <!-- Kolom 1 (Sidebar) -->
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 me-3">
                @include("mahasiswa/partial/sidebar")
            </div>

            <!-- Kolom 2 (Registrasi Akademik) -->
            <div class="col-md-9">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center" style="margin-top: 10px;">
                    <h4 class="fw-bold" style="font-size: 1.6rem; color: #353E6C">Registrasi Akademik</h4>
                    <div class="d-flex align-items-center" style="margin-bottom: 10px; margin-right: -100px;">
                        <input type="text" class="search-bar form-control" placeholder="Search Here" style="border-radius: 15px; height: 40px; width: 220px;">
                        <div class="profile-pic">
                            <a href="{{ route('profile') }}">
                                <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Content Container -->
                <div class="content-container">
                    <!-- Pilih Status Akademik -->
                    <h5 class="mt-4 text-center" style="margin-bottom: 15px;"><strong>Pilih Status Akademik</strong></h5>
                    <div class="status-container row g-3">
                        <div class="col status-card">
                            <img src="{{ asset('img/status.png') }}" alt="Aktif Icon" class="status-icon">
                            <div class="status-text">
                                <h5>AKTIF</h5>
                                <p>Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi Isian Rencana Studi (IRS).</p>
                                <div class="divider"></div>
                                <!-- Tombol Aktif -->
                                <button id="btnAktif" class="btn btn-secondary btn-status">Tersedia</button>
                            </div>
                        </div>
                        <div class="col status-card">
                            <img src="{{ asset('img/status.png') }}" alt="Cuti Icon" class="status-icon">
                            <div class="status-text">
                                <h5>CUTI</h5>
                                <p>Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa Undip.</p>
                                <div class="divider"></div>
                                <!-- Tombol Cuti -->
                                <button id="btnCuti" class="btn btn-secondary btn-status">Tersedia</button>
                            </div>
                        </div>
                    </div>


                    <!-- Informasi Pembayaran -->
                   <div class="info-box mt-4">
                    <p style="font-size: 20px;"><strong>Informasi Pembayaran Biaya Kuliah Semester</strong></p>
                    <p>Nama Mahasiswa : Yesi Dwi Ningias</p>
                    <p>Program Studi : Informatika</p>
                    <p>Semester : 5 | Tahun Ajaran 2024/2025 Ganjil</p>
                    <p>Jumlah Tagihan : 0</p>
                    <p>BillKey : 24060122120027</p>
                    <div style="margin-top: 25px;"> <!-- Menambahkan jarak antara BillKey dan tombol -->
                        <button class="btn bayar-button">SUDAH DIBAYAR</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    // Mendapatkan tombol
    const btnAktif = document.getElementById("btnAktif");
    const btnCuti = document.getElementById("btnCuti");

    // Fungsi untuk mengubah status tombol
    function pilihStatus(status) {
        if (status === "aktif") {
            btnAktif.classList.remove("btn-secondary");
            btnAktif.classList.add("btn-primary");
            btnAktif.textContent = "Terpilih";

            btnCuti.classList.remove("btn-primary");
            btnCuti.classList.add("btn-secondary");
            btnCuti.textContent = "Tidak tersedia";
        } else if (status === "cuti") {
            btnCuti.classList.remove("btn-secondary");
            btnCuti.classList.add("btn-primary");
            btnCuti.textContent = "Terpilih";

            btnAktif.classList.remove("btn-primary");
            btnAktif.classList.add("btn-secondary");
            btnAktif.textContent = "Tidak tersedia";
        }
    }

    // Event listener untuk tombol
    btnAktif.addEventListener("click", () => pilihStatus("aktif"));
    btnCuti.addEventListener("click", () => pilihStatus("cuti"));
</script>
</body>

</html>
