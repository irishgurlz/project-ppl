<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        /* Custom styles for notification */
        .notification-card {
            background-color: #D6C9F5; /* Warna latar belakang kotak notifikasi */
            border-radius: 8px; /* Membulatkan sudut */
            padding: 15px; /* Jarak di dalam kotak */
            margin-bottom: 10px; /* Jarak antar kotak notifikasi */
        }
        .notification-title {
            font-weight: bold; /* Menebalkan judul */
            margin-bottom: 5px; /* Jarak bawah untuk judul */
        }
        .btn-custom {
            background-color: #F26E6E; /* Warna tombol */
            color: white; /* Warna teks tombol */
        }
    </style>
</head>
<body>

<!-- CONTENT -->
<main class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar (Kolom 1) -->
        <div class="col-md-3 col-lg-2 p-2 d-none d-md-block">
            @include("mahasiswa.partial.sidebar")
        </div>

        <!-- Welcome dan Konten Utama (Kolom 2) -->
        <div class="col-md-9 col-lg-7 p-3">
            <h2 class="fw-bold" style="font-size: 1.6rem; margin-bottom: 15px; margin-top: 0px; color: #353E6C">Dashboard</h2>

            <!-- Kotak Welcome -->
            <div class="bg-white p-4 rounded my-1 d-flex justify-content-between align-items-center" style="max-width: 1000px; height: 160px; margin-bottom: 10px;">
                <div>
                    <h3 class="fw-bold">Welcome Back, Yesi Dwi Ningtias</h3>
                    <p class="d-none d-md-block">"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle."</p>
                </div>
                <img src="img/orang-1.png" alt="Welcome Image" style="max-width: 180px;"> <!-- Mengatur ukuran gambar -->
            </div>

            <!-- Kotak Konten Tambahan dengan Pemisah -->
            <div class="card bg-white p-3 mb-1" style="max-width: 1000px; height: auto; margin-top: 9px;">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Dosen Wali -->
                    <div class="text-center">
                        <h6 class="fw-bold mb-1">Dosen Wali</h6>
                        <p class="mb-0">Dr. Eng Adi Wibowo, S.Si, M.Kom</p>
                    </div>

                    <!-- Garis pemisah -->
                    <div class="vr mx-3"></div>

                    <!-- Status Akademik -->
                    <div class="text-center">
                        <h6 class="fw-bold mb-1">Status Akademik</h6>
                        <button class="btn" style="background-color: #1e3a8a; color: white; width: 90px; height: 35px; font-size: 16px;">AKTIF</button>
                    </div>

                    <!-- Garis pemisah -->
                    <div class="vr mx-3"></div>

                    <!-- Semester Studi -->
                    <div class="text-center">
                        <h6 class="fw-bold mb-1">Semester Studi</h6>
                        <p class="fw-bold mb-0" style="font-size: 1.2rem;">5</p>
                    </div>

                    <!-- Garis pemisah -->
                    <div class="vr mx-3"></div>

                    <!-- Semester Akademik -->
                    <div class="text-center">
                        <h6 class="fw-bold mb-1">Semester Akademik</h6>
                        <p class="mb-0">2024/2025 Ganjil</p>
                    </div>

                    <!-- Garis pemisah -->
                    <div class="vr mx-3"></div>

                    <!-- IPK dan SKS -->
                    <div class="text-center">
                        <h6 class="fw-bold mb-1">IPK / SKS</h6>
                        <p class="mb-0">4.00 / 85</p>
                    </div>
                </div>
            </div>
            <!-- Task Board Section -->
            <div class="task-board mt-3">
                <h4 style="font-size: 1.0rem; margin-bottom: 10px; margin-top: 0px;">Task Board</h4>
                <div class="row g-2">
                    <!-- Task Card 1 -->
                    <div class="col-12">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="img/registrasi-akademik.png" class="me-3" alt="Registrasi Akademik" style="width: 50px; height: 50px;">
                                    <div>
                                        <h5 class="card-title mb-1">Registrasi Akademik</h5>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-details" style="margin-top: 10px;">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Task Card 2 -->
                    <div class="col-12">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="img/irs2.png" class="me-3" alt="IRS" style="width: 50px; height: 50px;">
                                    <div>
                                        <h5 class="card-title mb-1">IRS</h5>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-details" style="margin-top: 10px;">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Task Card 3 -->
                    <div class="col-12">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="img/khs2.png" class="me-3" alt="KHS" style="width: 50px; height: 50px;">
                                    <div>
                                        <h5 class="card-title mb-1">KHS</h5>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-details" style="margin-top: 10px;">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Task Card 4 -->
                    <div class="col-12">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="img/jadwal-kuliah.png" class="me-3" alt="Jadwal Kuliah" style="width: 50px; height: 50px;">
                                    <div>
                                        <h5 class="card-title mb-1">Jadwal Kuliah</h5>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-details" style="margin-top: 10px;">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profil (Kolom 3) -->
        <div class="col-md-4 col-lg-3 p-2 d-none d-md-block">
            @include("mahasiswa.partial.sideprofile")
            
        <!-- Notifikasi Section -->
        <div class="card bg-white p-3 mt-3" style="height: 350px;">
            <div class="d-flex align-items-center mb-3">
                <img src="img/notification-icon.png" alt="Notification Icon" style="width: 50px; height: 50px; margin-right: 10px;">
                <h4 class="mb-0">Notifikasi</h4>
            </div>
            <div class="notification-card mb-3" style="background-color: #775E90; color: white; padding: 10px; border-radius: 5px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="notification-title" style="font-size: 1.0rem;">IRS Approval</h5>
                        <p class="mb-0" style="font-size: 0.9rem;">Status: <strong>Approved</strong></p>
                    </div>
                    <button class="btn btn-sm btn-custom" style="color: black;">See Details</button>
                </div>
            </div>
            <div class="notification-card mb-3" style="background-color: #775E90; color: white; padding: 10px; border-radius: 5px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="notification-title" style="font-size: 1.0rem;">New Assignment</h5>
                        <p class="mb-0" style="font-size: 0.9rem;">Tugas baru telah ditugaskan.</p>
                    </div>
                    <button class="btn btn-sm btn-custom" style="color: black;">See Details</button>
                </div>
            </div>
            <div class="notification-card mb-3" style="background-color: #775E90; color: white; padding: 10px; border-radius: 5px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="notification-title" style="font-size: 1.0rem;">Kelas Dibatalkan</h5>
                        <p class="mb-0" style="font-size: 0.9rem;">Kelas Pengenalan Web dibatalkan.</p>
                    </div>
                    <button class="btn btn-sm btn-custom" style="color: black;">See Details</button>
                </div>
            </div>
        </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
