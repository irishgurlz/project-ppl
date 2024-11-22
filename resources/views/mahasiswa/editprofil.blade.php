<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .profile-container {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 132%;
            height: 727px;
            margin-top: 5px;
        }

        .profile-content {
            display: flex;
            align-items: center;
            gap: 20px; /* Jarak antara gambar dan form */
            flex-wrap: wrap;
            justify-content: center;
        }

        .profile-img {
            width: 100px; /* Ukuran gambar profil */
            height: 100px; /* Ukuran gambar profil */
            border-radius: 50%; /* Membulatkan gambar profil */
            flex-shrink: 0; /* Agar gambar tidak menyusut */
            align-self: flex-start;
        }

        .form-container {
            flex: 1; /* Agar form menyesuaikan ruang di sebelah gambar */
        }

        .save-button {
            background-color: #F9908A; /* Warna tombol simpan */
            color: black; /* Warna teks tombol */
            border: none; /* Menghilangkan border */
            padding: 10px 20px; /* Jarak dalam tombol */
            border-radius: 5px; /* Sudut membulat tombol */
            transition: background-color 0.3s; /* Animasi transisi */
            font-weight: bold;
            margin-left: 88%;
            width: 112px;
            height: 40px;
        }

        .save-button:hover {
            background-color: #FA6969; /* Warna saat hover pada tombol simpan */
        }

        .alert.custom-alert {
            background-color: #FA6969;
            color: black; /* Warna teks alert */
            border-color: #FA6969;
            border-radius: 8px;
            margin-bottom: 50px;
            font-size: 1.1rem;
        }

        .input-label {
            background-color: #F1DEDD; /* Warna pink muda */
            width: 100%; /* Lebar input menyesuaikan kontainer */
            height: 60px;
        }

        .form-label {
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<main class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar (Kolom 1) -->
        <div class="col-md-3 col-lg-2 p-2 d-none d-md-block">
            @include("mahasiswa.partial.sidebar")
        </div>

        <!-- Profile section -->
        <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-1 pt-3">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold" style="color: #353E6C; margin-left: 10px; font-size: 1.6rem;">Profil</h4>
                <div class="d-flex align-items-center" style="margin-left: 1060px;">
                    <input type="text" class="search-bar form-control me-2" placeholder="Search Here" style="border-radius: 15px; height: 40px;">
                    <a href="{{ route('profile') }}">
                        <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px;">
                    </a>
                </div>
            </div>

            <!-- Profile Edit Section -->
            <div class="col-md-9 col-12 d-flex flex-column justify-content-start p-2">
                <div class="profile-container mx-auto">
                    <div class="text-center mb-4" style="font-weight: bold; font-size: 1.5rem">Edit - Account Profile</div>

                    <div class="alert custom-alert" role="alert">
                        <strong>Info Penting</strong> 
                        <div>Data nomor telepon ini akan disimpan kerahasiaannya oleh pihak Undip.</div>
                    </div>

                    <!-- Profile Content -->
                    <div class="profile-content">
                        <!-- Profile Image -->
                        <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="profile-img">

                        <!-- Form for Profile Info -->
                        <div class="form-container">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control input-label" id="nama" value="Yesi Dwi Ningtias" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control input-label" id="alamat" value="Blok Songo" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="identity" class="form-label">Identity</label>
                                        <input type="text" class="form-control input-label" id="identity" value="XXXXXXXXXXXXXXX" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telepon" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control input-label" id="telepon" value="08XXXXXXXXXX" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control input-label" id="email" value="yesidwiningtias@undip.id" required>
                                    </div>
                                </div>

                                <button type="submit" class="save-button">Save</button>
                                <!-- <a href="/profile" class="btn btn-secondary ms-2">Kembali ke Profil</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
