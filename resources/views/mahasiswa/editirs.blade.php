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
        .total-sks {
            font-size: 1.5rem;
            font-weight: bold;
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0">
        <!-- Kolom 1 (Sidebar) -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2">
            @include("partial/sidebar")
        </div>
        
        <!-- Kolom 2 (Notifikasi dan Tabel IRS) -->
        <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="text-black column-title d-flex justify-content-start">
                    <p class="fw-bold" style="font-size: 1.6rem;">IRS</p>
                </div>
                <form class="d-flex" style="width: 300px; margin-left: 1000px;">
                    <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search" style="border-radius: 15px;">
                </form>
                <div class="profile-pic">
                    <a href="{{ route('profile') }}">
                        <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                    </a>
                </div>
            </div>
            <div class="bg-white column-title d-flex flex-column" style="width:95%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
                <p>Daftar Mata Kuliah yang sudah dipilih, Anda dapat melakukan pembatalan dan penggantian Mata Kuliah</p>

                <table class="table table-bordered mt-3">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SMT</th>
                            <th>KELAS</th>
                            <th>STATUS</th>
                            <th>SKS</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pengembangan Berbasis Platform</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>4</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Komputasi Tersebar dan Paralel</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>4</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sistem Informasi</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Proyek Perangkat Lunak</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>4</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Teori Bahasa dan Otomata</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pembelajaran Mesin</td>
                            <td>5</td>
                            <td>A</td>
                            <td>BARU</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="total-sks">
                    TOTAL SKS: 19
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
