<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
        .edit-btn {
            background-color: #FA6969;
            border: none;
            padding: 10px 20px;
            border-radius: 15px;
            color: white;
            width: 100%;
            max-width:600px;
            font-size: 1.1rem;
            margin-top: 20px; /* Tambahkan margin agar ada jarak dari informasi profil */
        }
        .edit-btn:hover {
            background-color: #e67b71;
        }
        .profile-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        @media (min-width: 768px) {
            .profile-wrapper {
                flex-direction: row;
            }
        }
        .profile-info {
            margin-left: 20px;
        }
    </style>

    <body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
                @include("partial.Sidebar");
            </div>

        <!-- Main Content -->
         <!-- Kolom 2 -->
         <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Profile</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                    
                    <!-- "KETUA PROGRAM STUDI" Section -->
                    <div class="text-center mb-3" style="margin-right: 470px;">
                        <div class="d-inline-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 15px; background-color: #DBDDF4;">
                                <span style="font-weight: bold; font-size: 16px; color: black; ">KETUA PROGRAM STUDI </span>
                        </div>
                    </div>

                    <!-- Profile Image and Info in One Row -->
                    <div class="d-flex justify-content-center align-items-center mt-3" style="width: 100%; gap: 2rem;">
                        <!-- Profile Image -->
                        <img src="img/profile kotak.png" alt="Profile Image" class="profile-image mb-3" style="height: 300px; width: 250px;">  
                        
                        <!-- Profile Info -->
                        <div class="p-4 text-white d-flex flex-column align-items-start" style="width:40%; height:100%; border-radius:15px; background-color: #775E90;">
                            <div class="d-flex justify-content-start" style="width:100%;">
                                <div style="font-weight:bold; font-size: 20px;">NANDHA TRIMERDIANI H</div>
                                <div class="badge-active d-flex justify-content-center align-items-center p-1 mt-2 ms-2" style="background-color: #28a745; color: white; border-radius:10px">
                                    Aktif
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="mb-1">NIP: <span>XXXXXXXXXXXX</span></p>
                                <p class="mb-1">Fakultas: <span>SAINS DAN MATEMATIKA</span></p>
                                <p class="mb-1">Nomor HP: <span>08xxxxxxxxx</span></p>
                                <p class="mb-1">Email Institusi: <span>nandha@admin.ac.id</span></p>
                                <p class="mb-1">Email Pribadi: <span>nandhatrimerdiani@gmail.com</span></p>
                                <p class="mb-1">Alamat Sekarang: <span>Tembalang</span></p>
                            </div>
                        </div>
                    </div>
     
                    <!-- Edit Button Below Profile Info -->
                        <div class="text-center mt-4" style="width: 80%">
                            <a href="editProfil" class="btn" style="width: 50%; background-color: #FA6969; border-radius: 10px; color: white; padding: 10px 0; font-size: 16px; margin-left: 280px;">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>