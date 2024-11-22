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
                    
                            </table>

                            <!-- Untuk Dropdown -->
                            <div class= "col-3">
                                    <select class= " form-select form-select-sm" aria-label="Default select example" style="margin-left: 400px;">
                                    <option selected>--Pilih Jenis Semester--</option>
                                    <option value="1">Ganjil</option>
                                    <option value="2">Genap</option>
                            </select>
                            </div>
                            <div class=" d-flex justify-content-start">
                                <!-- Search bar -->
                                <nav class=" navbar" style="margin-right: 630px;">
                                <div class="container-fluid">
                                    <a class="navbar-brand">
                                        <!-- Text "Show" on the left of dropdown -->
                                         <span>Show</span>
    
                                         <!-- Dropdown -->
                                        <div class="dropdown "> 
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            1 </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">1</a></li>
                                            <li><a class="dropdown-item" href="#">2</a></li>
                                            <li><a class="dropdown-item" href="#">3</a></li>
                                        </ul>
                                    </div>
                                    
                                    </a>
                                    <form class="d-flex" style="margin-left: 30px;"role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                                </nav>
                            </div>

                            <!--Menambahkan table-->
                            <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Kode Mata kuliah</th> --}}
                                    <th>Nama Mata kuliah</th>
                                    <th>Jenis</th>
                                    <th>SKS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mata_kuliah as $key => $value)
                                <tr class= "text-center">
                                    <td> {{$key+1}}</td>
                                    <td> {{$value -> nama_mata_kuliah}}</td>
                                    <td> {{$value -> jenis_mata_kuliah}}</td>
                                    <td> {{$value -> sks}}</td>
                                    {{-- <td> {{$value -> semester}}</td>
                                    <td> {{$value -> nidn_dosen_1}}</td>
                                    <td> {{$value -> nidn_dosen_2}}</td>
                                    <td> {{$value -> nidn_dosen_3}}</td> --}}
                                    <td><a href="/kaprodi/detailsaturJadwal" class="btn btn-sm btn-details">Details</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td> Tidak ada data </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        
                        