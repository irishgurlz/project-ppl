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
        .khs-container {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 98%;
            height: 727px;
        }

        .semester-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .semester-item h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
        .see-details {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .see-details:hover {
            background-color: #0056b3;
        }
        .sidebar {
            background-color: #e9ecef;
            height: 100vh;
            padding: 20px;
            border-radius: 15px;
        }

    </style>
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2">
            @include("mahasiswa/partial/sidebar")
        </div>

        <!-- Profile section -->
        <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold" style="color: #353E6C; font-size: 1.6rem; white-space: nowrap;">Kartu Hasil Studi (KHS)</h4>
                    <div class="d-flex align-items-center" style="margin-left: 830px; margin-bottom: 0px;">
                        <input type="text" class="search-bar form-control me-2" placeholder="Search Here" style="border-radius: 15px; height: 40px; width: 200px;">
                       <div class="profile-pic">
                        <a href="{{ route('profile') }}">
                            <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                        </a>
                        </div>
                    </div>
                </div>
            <p class="fw-bold" style="font-size: 1.2rem; margin-bottom: 5px;">Lihat dan cetak hasil studi Anda untuk setiap semester.</p>
            <div class="khs-container">
                <div class="semester-item">
                <div>
                    <h3>Semester - 1 | Tahun Ajaran 2022/2023 Ganjil</h3>
                    <p>Jumlah SKS 21</p>
                </div>
                <a href="{{ route('cetakkhs') }}" class="btn btn-primary">See Details</a>
            </div>
            <div class="semester-item">
                <div>
                    <h3>Semester - 2 | Tahun Ajaran 2022/2023 Ganjil</h3>
                    <p>Jumlah SKS 21</p>
                </div>
                <a href="{{ route('cetakkhs') }}" class="btn btn-primary">See Details</a>
            </div>
            <div class="semester-item">
                <div>
                    <h3>Semester - 3 | Tahun Ajaran 2023/2024 Ganjil</h3>
                    <p>Jumlah SKS 21</p>
                </div>
                <a href="{{ route('cetakkhs') }}" class="btn btn-primary">See Details</a>
            </div>
            <div class="semester-item">
                <div>
                    <h3>Semester - 4 | Tahun Ajaran 2023/2024 Ganjil</h3>
                    <p>Jumlah SKS 21</p>
                </div>
                <a href="{{ route('cetakkhs') }}" class="btn btn-primary">See Details</a>
            </div>
            <div class="semester-item">
                <div>
                    <h3>Semester - 5 | Tahun Ajaran 2024/2025 Ganjil</h3>
                    <p>Jumlah SKS 21</p>
                </div>
                <a href="{{ route('cetakkhs') }}" class="btn btn-primary">See Details</a>
            </div>
        </div>
    </div>
        </div>
        </div>
    </div>
</main>
</body>
</html>
