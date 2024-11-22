<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi IRS</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        body {
            background-color: #e6e8ff; /* Light purple background */
        }
        .main-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            width: 160px;
            height: 200px;
            /* object-fit: cover; */
            /* border-radius: 10%;  */
            margin-top: 10px;
        }
        .profile-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        .profile-info {
            background-color: #775E90;
            padding: 10px 20px;
            border-radius: 15px;
            color: white;
            width: 100%;
            max-width:600px;
            font-size: 1.1rem;
        }
    </style>

    <body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
                @include("Kaprodi.partial.Sidebar");
            </div>

        <!-- Main Content -->
         <!-- Kolom 2 -->
         <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Verifikasi IRS</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                    <div class="card w-100 d-flex flex-column" style="height: 100%;"> <!-- Membuat card full tinggi -->
                    <h4 class="p-4 text-primary-emphasis"><strong>Daftar Angkatan</strong></h4>
                    <div class="table-responsive flex-grow-1 p-2"> <!-- Agar tabel bisa stretch dengan card -->
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Angkatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Contoh data array angkatan
                                $angkatan = [
                                    ['no' => 1, 'tahun' => 2018],
                                    ['no' => 2, 'tahun' => 2019],
                                    ['no' => 3, 'tahun' => 2020],
                                    ['no' => 4, 'tahun' => 2021],
                                    ['no' => 5, 'tahun' => 2022],
                                    ['no' => 6, 'tahun' => 2023],
                                    ['no' => 7, 'tahun' => 2024],
                                ];

                                foreach ($angkatan as $row) {
                                    echo "<tr>
                                            <td>{$row['no']}</td>
                                            <td>{$row['tahun']}</td>
                                            <td><a href='verifikasiIRS1' class='btn btn-primary btn-sm'>Lihat</a></td>
                                        </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </main>
            </body>
            </html>

