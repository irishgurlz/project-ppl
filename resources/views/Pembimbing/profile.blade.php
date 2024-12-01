<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .profile-container {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 98%;
            height: 650px;
        }

        .profile-header {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
            color: black;
            background-color: #DBDDF4; 
            padding: 10px 20px; /* Padding untuk membuat kotak */
            border-radius: 10px; /* Membuat sudut membulat */
            display: inline-block;
            width: 280px; 
            height: 40px; 
            margin-left: 255px;
        }


        .profile-info {
            background-color: #775E90;
            border-radius: 15px;
            padding: 25px;
            font-size: 1.2rem;
            color: #333;
            height: 100%;
        }

        .profile-info p {
            margin: 0;
        }

        .profile-img {
            width: 280px;
            height: 345px; 
            border-radius: 10px;
            object-fit: cover;
        }

        .profile-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .profile-label {
            font-weight: bold;
            color: white;
            width: 160px; /* Lebar tetap cukup besar untuk label terpanjang */
            text-align: left;
            position: relative;
            white-space: nowrap; /* Menghindari label terbungkus ke baris baru */
        }

        .profile-label::after {
            content: ":";
            position: absolute;
            right: -10px; /* Mengatur posisi titik dua */
        }

        .profile-value {
            color: white;
            font-size: 1.2rem;
            margin-left: 20px; /* Jarak antara titik dua dan nilai */
        }

        .edit-button {
            background-color: #f85858;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 10px;
            font-size: 1.1rem;
            width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 247px;
             text-decoration: none;
        }

        .sidebar {
            background-color: #e9ecef;
            height: 100vh;
            padding: 20px;
            border-radius: 15px;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 5px;
        }

        .status-active {
            color: black;
            background-color: #6BCD7B;
            padding: 5px 10px;
            border-radius: 40px;
            display: inline-block;
            margin-left: 10px;
            font-size: 0.7rem;
        }

        .divider {
            height: 2px;
            background-color: white;
            margin: 10px 0;
        }

        .profile-name {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            margin-bottom: 5px;
        }

        .profile-content {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
        }
        .profile-picture {
            width: 50px; /* Ukuran gambar profil */
            height: 50px; /* Ukuran gambar profil */
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
                    <h4 class="fw-bold" style="color: #353E6C; font-size: 1.6rem;">Profil</h4>
                    <div class="d-flex align-items-center" style="margin-left: 1060px; margin-bottom: 10px;">
                <input type="text" class="search-bar form-control me-2" placeholder="Search Here" style="border-radius: 15px; height: 40px; max-width: 300px;">
                       <div class="profile-pic">
                        <a href="{{ route('profile') }}">
                            <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                        </a>
                        </div>
                    </div>
                </div>
            
            <div class="profile-container">
                <!-- Profile Title -->
                <h2 class="profile-header">Pembimbing Akademik</h2>
                
                <div class="profile-content">
                    <!-- Profile Image -->
                    <div>
                        <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="profile-img">
                    </div>

                    <!-- Profile Information -->
                    <div class="profile-info">
                        <!-- Nama Mahasiswa dan Status -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="profile-name">Nama</div>
                            <div class="status-active">AKTIF</div>
                        </div>
                        <div class="divider"></div>
                        
                        <div class="profile-row">
                            <div class="profile-label">NIP </div>
                            <div class="profile-value">XXXXXXXXXXXXXXX</div>
                        </div>
                        <div class="profile-row">
                            <div class="profile-label">Fakultas </div>
                            <div class="profile-value">SAINS DAN MATEMATIKA</div>
                        </div>
                        <div class="profile-row">
                            <div class="profile-label">Nomor HP </div>
                            <div class="profile-value">08XXXXXXXXXX</div>
                        </div>
                        <div class="profile-row">
                            <div class="profile-label">Email Institusi </div>
                            <div class="profile-value">youremail@admin.id</div>
                        </div>
                        <div class="profile-row">
                            <div class="profile-label">Email Pribadi </div>
                            <div class="profile-value">yourpersonalemail@gmail.com</div>
                        </div>
                        <div class="profile-row">
                            <div class="profile-label">Alamat Sekarang </div>
                            <div class="profile-value">Your Address</div>
                        </div>
                    </div>
                </div>
                <!-- Edit Button -->
                <div class="d-flex justify-content-end mt-3">
                <a href="{{ url('/editprofile') }}" class="edit-button">Edit</a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
