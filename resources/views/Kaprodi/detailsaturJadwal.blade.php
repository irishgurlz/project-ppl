<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailsaturJadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<main class="container-fluid my-0 p-0"> 
    <div class="row g-0">
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("Kaprodi.partial.Sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Atur Jadwal </p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                    
                <!-- Tombol kembali dan tombol semester -->
                <div class="d-flex align-items-center mb-4" style="position: absolute; top: 10px; left: 10px;">
                    <!-- Back Button -->
                    <button class="btn d-flex justify-content-center align-items-center me-2" 
                            style="width: 40px; height: 40px; background-color: #6C4F80; color: white; border-radius: 50%; border: none;">
                        <span style="font-size: 1.2em;">&#8592;</span>
                    </button>
                    <!-- Semester Button -->
                    <button class="btn btn-primary" style="background-color: #3D3C95; border-color: #3D3C95; border-radius: 8px; padding: 5px 20px;">
                        <strong>Semester 1</strong>
                    </button>
                </div>


               <!-- Schedule Header -->
               <div class="text-center py-3 " style="background-color: #B5A3C6; border-radius: 10px 10px 0 0; color: #333; min-width: 650px;">
                    <h5 class="m-0" style="font-weight: bold;">Dasar Pemrograman</h5>
               </div>

                <!-- Schedule List -->
                <div style="background-color: #A39DBF; padding: 20px; border-radius: 0 0 10px 10px; min-width: 650px; min-height: 500px; position: relative;">

                     <!-- Tambah Kelas Button -->
                        <div class="text-end mb-3">
                            <a href="tambahKelas" class="btn btn-primary" style="background-color: #89CFF0; color: white; border: none; border-radius: 8px; padding: 5px 15px;">
                                Tambah Kelas
                            </a>
                        </div>

                    <!-- Monday -->
                    <div class="d-flex align-items-start mb-2">
                        <!-- Bulatan Huruf -->
                        <div class="text-center me-3" style="width: 35px; background-color: #6C4F80; color: white; border-radius: 50%;">
                            <p class="m-0 py-2">A</p>
                        </div>

                        <!-- Konten Jadwal dengan Tombol Edit di Dalamnya -->
                        <div class="flex-grow-1">
                            <div class="p-2 pt-1 d-flex justify-content-between align-items-center" style="height: 78px; background-color: #F5E8F7; border-radius: 10px;">
                                <div>
                                    <strong style="display: block; margin-bottom: 2px;">Senin</strong>
                                    <p class="m-0" style="line-height: 1.2; margin-bottom: 2px;">07.00 - 09.40</p>
                                    <p class="m-0" style="line-height: 1.2;">E101</p>
                                </div>
                                <!-- Tombol Edit -->
                                <a href="editKelas" class="btn" style="background-color: #EC8B7B; color: black; border: none; border-radius: 8px; padding: 5px 15px; font-weight: bold;">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="d-flex align-items-start mb-2">
                        <div class="text-center me-3" style="width: 35px; background-color: #6C4F80; color: white; border-radius: 50%;">
                            <p class="m-0 py-2">B</p>
                        </div>
                        <div class="flex-grow-1">
                            <div class="p-2 pt-1 d-flex justify-content-between align-items-center" style="height: 78px; background-color: #F5E8F7; border-radius: 10px;">
                                <div>
                                <strong class="display: block; margin-bottom: 2px">Selasa</strong>
                                <p class="m-0" style="line-height: 1.2; margin-bottom: 2px;">07.00 - 09.40</p>
                                <p class="m-0" style="line-height: 1.2;">E103</p>
                            </div>
                            <!-- Tombol Edit -->
                            <a href="editKelas" class="btn" style="background-color: #EC8B7B; color: black; border: none; border-radius: 8px; padding: 5px 15px; font-weight: bold;">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="d-flex align-items-start mb-2">
                        <div class="text-center me-3" style="width: 35px; background-color: #6C4F80; color: white; border-radius: 50%;">
                            <p class="m-0 py-2">C</p>
                        </div>
                        <div class="flex-grow-1">
                            <div class="p-2 pt-1 d-flex justify-content-between align-items-center" style="height: 78px; background-color: #F5E8F7; border-radius: 10px;">
                                <div>
                                <strong class="display: block; margin-bottom: 2px">Rabu</strong>
                                <p class="m-0" style="line-height: 1.2; margin-bottom: 2px;" >07.00 - 09.40</p>
                                <p class="m-0" style="line-height: 1.2;">E102</p>
                                </div>
                            <!-- Tombol Edit -->
                            <a href="editKelas" class="btn" style="background-color: #EC8B7B; color: black; border: none; border-radius: 8px; padding: 5px 15px; font-weight: bold;">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="d-flex align-items-start mb-2">
                        <div class="text-center me-3" style="width: 35px; background-color: #6C4F80; color: white; border-radius: 17.5px;">
                            <p class="m-0 py-2">D</p>
                        </div>
                        <div class="flex-grow-1">
                            <div class="p-2 pt-1  d-flex justify-content-between align-items-center" style="height: 78px; background-color: #F5E8F7; border-radius: 10px;">
                                <div>
                                <strong class="display: block; margin-bottom: 2px">Kamis</strong>
                                <p class="m-0" style="line-height: 1.2; margin-bottom: 2px;">07.00 - 08.30</p>
                                <p class="m-0" style="line-height: 1.2;">E103</p>
                            </div>
                            <!-- Tombol Edit -->
                            <a href="editKelas" class="btn" style="background-color: #EC8B7B; color: black; border: none; border-radius: 8px; padding: 5px 15px; font-weight: bold;">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                    