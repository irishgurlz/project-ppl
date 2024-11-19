<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alokasi Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<main class="container-fluid my-0 p-0"> <!-- Menghapus padding -->
    <div class="row g-0"> <!-- g-0 untuk menghapus jarak antar kolom -->
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-4 col-lg-2 p-2 d-none d-md-block">
            @include("Bagian Akademik/partial/sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Profile</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                    
                    <!-- "BAGIAN AKADEMIK" Section -->
                    <div class="ps-4" style="width: 70%;">
                        <div class="p-3 d-flex justify-content-center align-items-center" style="width:35.5%; border-radius:15px; background-color: #DBDDF4;">
                            <div style="font-weight:bold; font-size: 20px; color: black;">BAGIAN AKADEMIK</div>
                        </div>
                    </div>

                    <!-- Profile Image and Info in One Row -->
                    <div class="d-flex justify-content-center align-items-center mt-3" style="width: 100%; gap: 2rem;">
                        <!-- Profile Image -->
                        <img src="img/profile-2.png" style="border-radius:15px; width:24%; height: auto;" alt="Profile Picture">
                        
                        <!-- Profile Info -->
                        <div class="p-4 text-white d-flex flex-column align-items-start" style="width:40%; height:100%; border-radius:15px; background-color: #775E90;">
                            <div class="d-flex justify-content-start" style="width:100%;">
                                <div style="font-weight:bold; font-size: 20px;">ANIQAH NURSABRINA</div>
                                <div class="badge-active d-flex justify-content-center align-items-center p-1 mt-2 ms-2" style="background-color: #28a745; color: white;">
                                    Aktif
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="mb-1">NIP: <span>XXXXXXXXXXXX</span></p>
                                <p class="mb-1">Fakultas: <span>SAINS DAN MATEMATIKA</span></p>
                                <p class="mb-1">Nomor HP: <span>08xxxxxxxxx</span></p>
                                <p class="mb-1">Email Institusi: <span>aniqah@admin.ac.id</span></p>
                                <p class="mb-1">Email Pribadi: <span>aniqahnursabrina@gmail.com</span></p>
                                <p class="mb-1">Alamat Sekarang: <span>Tembalang</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Button Below Profile Info -->
                    <div class="text-center mt-3 d-flex justify-content-end" style="width: 67%;">
                        <button class="btn" style="width: 60%; background-color: #FA6969; border-radius: 10px; color: white;">Edit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html> 
