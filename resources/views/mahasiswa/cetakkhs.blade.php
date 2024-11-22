<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        body {
            background-color: #DBDDF4;
        }

        .profile-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .table-container {
            margin-top: 20px;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #353E6C;
        }

        .search-bar {
            border-radius: 15px;
            height: 40px;
        }

        .btn-container {
            text-align: right;
            margin-top: 20px;
        }

        .btn-container .btn img {
            width: 20px;
            margin-right: 5px;
        }

        .total-row {
            font-weight: bold;
            background-color: #DBDDF4;
        }
        .btn-action {
            margin-top: 20px;
        }

        .btn-action .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<main class="container-fluid">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col-md-2 col-lg-2 p-2">
            @include("mahasiswa/partial/sidebar")
        </div>

        <!-- Main Content -->
        <div class="col-md-10 col-lg-10 d-flex flex-column p-3">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold" style="color: #353E6C;">Kartu Hasil Studi (KHS)</h4>
                <div class="d-flex align-items-center">
                    <input type="text" class="search-bar form-control me-2" placeholder="Search Here">
                    <a href="{{ route('profile') }}">
                        <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px;">
                    </a>
                </div>
            </div>

            <!-- Semester Info -->
            <p class="fw-bold" style=" margin-bottom: 5px;">Semester-1 | Tahun Ajaran 2022/2023 Ganjil</p>

            <!-- Profile Container -->
            <div class="profile-container">
                <!-- Table -->
                <div class="table-container table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th style="background-color: #001A72; color: white;">NO</th>
                                <th style="background-color: #001A72; color: white;">KODE</th>
                                <th style="background-color: #001A72; color: white;">NAMA MATA KULIAH</th>
                                <th style="background-color: #001A72; color: white;">STATUS</th>
                                <th style="background-color: #001A72; color: white;">SKS</th>
                                <th style="background-color: #001A72; color: white;">NILAI HURUF</th>
                                <th style="background-color: #001A72; color: white;">BOBOT</th>
                                <th style="background-color: #001A72; color: white;">SKS X BOBOT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PAIK6102</td>
                                <td>Dasar Pemrograman</td>
                                <td>BARU</td>
                                <td>3</td>
                                <td>A</td>
                                <td>4</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PAIK6103</td>
                                <td>Matematika 1</td>
                                <td>BARU</td>
                                <td>3</td>
                                <td>A</td>
                                <td>4</td>
                                <td>12</td>
                            </tr>
                            <!-- Additional rows here -->
                            <tr class="total-row">
                                <td colspan="4" style="background-color: #DBDDF4;">TOTAL</td>
                                <td style="background-color: #DBDDF4;">21</td>
                                <td style="background-color: #DBDDF4;"></td>
                                <td style="background-color: #DBDDF4;">32</td>
                                <td style="background-color: #DBDDF4;">96</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Summary -->
                <div class="justify-content-between mt-3 fw-bold">
                    <div>IPK : 4.00</div>
                    <div>IPS : 4.00</div>
                    <div>Total SKS : 85</div>
                </div>

                <div class="btn-action">
                            <button style="background-color: #DBDDF4; color: black; border: none; padding: 8px 16px; border-radius: 4px; display: flex; align-items: center;" class="fw-bold">
                                <img src="img/cetak.png" alt="Cetak Kartu UAS" style="width: 20px; height: 20px; margin-right: 8px;">
                                Cetak Kartu UAS
                            </button>
                        </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
