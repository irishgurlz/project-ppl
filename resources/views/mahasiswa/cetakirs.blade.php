<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .profile-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 98%;
            height: 727px;
        }

        .profile-header {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
            color: black;
            background-color: #DBDDF4;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            width: 280px;
            height: 40px;
            margin-left: 255px;
        }

        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #353E6C;
        }

        .btn-action {
            margin-top: 20px;
        }

        .btn-action .btn {
            margin-right: 10px;
        }

        .approval-info {
            margin-top: 20px;
            font-size: 1.1 rem;
            color: black;
        }

        .approval-info i {
            color: #6BCD7B;
            
        }

        .search-bar {
            border-radius: 15px;
            height: 40px;
        }
    </style>
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2">
            @include("partial/sidebar")
        </div>

        <!-- Profile section -->
        <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold" style="color: #353E6C; font-size: 1.5rem; white-space: nowrap;">Isian Rencana Studi (IRS)</h4>
                    <div class="d-flex align-items-center" style="margin-left: 900px; margin-bottom: 10px;">
                        <input type="text" class="search-bar form-control me-2" placeholder="Search Here">
                       <div class="profile-pic">
                        <a href="{{ route('profile') }}">
                            <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                        </a>
                        </div>
                    </div>
                </div>
            <p style="font-size: 1.0rem; margin-bottom: 5px;" class="fw-bold">Semester-4 | Tahun Ajaran 2022/2023 Ganjil</p>
            <div class="profile-container">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th style="background-color: #001A72; color: white;">NO</th>
                                    <th style="background-color: #001A72; color: white;">KODE</th>
                                    <th style="background-color: #001A72; color: white;">NAMA MATA KULIAH</th>
                                    <th style="background-color: #001A72; color: white;">STATUS</th>
                                    <th style="background-color: #001A72; color: white;">SKS</th>
                                    <th style="background-color: #001A72; color: white;">KELAS</th>
                                    <th style="background-color: #001A72; color: white;">RUANG</th>
                                    <th style="background-color: #001A72; color: white;">NAMA DOSEN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PAIK6406</td>
                                    <td>Sistem Cerdas</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>K102</td>
                                    <td>Sandy Kurniawan, S.Kom., M.Kom.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PAIK6404</td>
                                    <td>Gravitasi dan Komputasi Visual</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>A303</td>
                                    <td>Dr. Aris Sugiharto, S.Si., M.Kom.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>PAIK6401</td>
                                    <td>Pemrograman Berbasis Objek</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>E101</td>
                                    <td>Khadijah, S.Kom., M.Cs.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>PAIK6405</td>
                                    <td>Manajemen Basis Data</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>A303</td>
                                    <td>Beta Noranita, S.Si., M.Kom.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PAIK6403</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>K102</td>
                                    <td>Satriyo Adhy, S.Si., M.T.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>PAIK6402</td>
                                    <td>Analisis dan Algoritma Strategi</td>
                                    <td>BARU</td>
                                    <td>3</td>
                                    <td>A</td>
                                    <td>A303</td>
                                    <td>Dr. Eng. Adi Wibowo, S.Si., M.Kom.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="btn-container" style="display: flex; gap: 10px;">
                        <div class="btn-action">
                            <button style="background-color: #DBDDF4; color: black; border: none; padding: 8px 16px; border-radius: 4px; display: flex; align-items: center;" class="fw-bold">
                                <img src="img/cetak.png" alt="Cetak IRS" style="width: 20px; height: 20px; margin-right: 8px;">
                                Cetak IRS
                            </button>
                        </div>

                        <div class="btn-action">
                            <button style="background-color: #DBDDF4; color: black; border: none; padding: 8px 16px; border-radius: 4px; display: flex; align-items: center;" class="fw-bold">
                                <img src="img/cetak.png" alt="Cetak Kartu UTS" style="width: 20px; height: 20px; margin-right: 8px;">
                                Cetak Kartu UTS
                            </button>
                        </div>

                        <div class="btn-action">
                            <button style="background-color: #DBDDF4; color: black; border: none; padding: 8px 16px; border-radius: 4px; display: flex; align-items: center;" class="fw-bold">
                                <img src="img/cetak.png" alt="Cetak Kartu UAS" style="width: 20px; height: 20px; margin-right: 8px;">
                                Cetak Kartu UAS
                            </button>
                        </div>
                    </div>

                    <div class="approval-info">
                        <p class="fw-bold" style="color: hitam;"><i class="bi bi-check-circle"></i> IRS telah disetujui pembimbing akademik, </p>
                        <div style="font-size: 14px; color: black; display: flex; flex-direction: column; gap: 5px;">
                            <div style="display: flex; align-items: center;">
                                <img src="img/clock.png" alt="Clock" style="width: 16px; height: 16px; margin-right: 5px;">
                                Minggu, 18 Agustus 2024 pukul 17:09
                            </div>
                            <div style="display: flex; align-items: center;">
                                <img src="img/user-1.png" alt="Person" style="width: 16px; height: 16px; margin-right: 5px;">
                                Adi Wibowo - 198203092006041002
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
</main>
</body>
</html>
