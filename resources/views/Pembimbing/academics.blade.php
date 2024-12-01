<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .custom-card {
            background-color: #B5A3C6; /* Warna background card */
            color: black; /* Warna teks pada card */
            border: none; /* Menghapus border default */
            border-radius: 10px; /* Membuat sudut membulat */

        }
    </style>
</head>
<body>
    <!-- Main Container -->
    <main class="container-fluid my-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 mb-3">
                @include("Pembimbing/partial/sidebar")
            </div>

            <!-- Main Content -->
            <div class="col-md-6 col-lg-7 my-4 bg-white mx-auto" style="height:100%; border-radius:15px;">
                <div class="mb-4">
                    <h4 class="text-black fw-bold mt-3">Akademik</h4>
                </div>
                <!-- Card 1 -->
                <div class="card mb-4 custom-card" style="position: relative;  overflow: hidden;">
                    <div class="d-flex justify-content-center align-items-center" style=" margin-top: 80px">
                        <div class="col-4 text-end">
                            <img src="img/task-1.png" class="img-fluid" style="position: absolute; top: -20px; right:10px; width: 150px; height: auto;">
                        </div>    

                        <div class="card custom-card" style="height: 80%; position: absolute;  left: 20px; background-color: #D6CAF1; border-radius: 10px; padding: 10px; width: 70%;">
                            <div class="card-body">
                                <h4 class="card-title fw-bold" style="font-size: 20px; text-align:right;margin-top: 35px;">Penilaian <br>& Tugas</h4>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-light" style="position: absolute; bottom: 30px; left: 30px; background-color: #F9908A; border-radius: 10px; font-weight: bold; color: white; width:20%;">
                        Details
                    </button>
                </div>


                <!-- Card 2 -->
                <div class="card mb-4 custom-card" style="position: relative;  overflow: hidden;">
                    <div class="d-flex justify-content-center align-items-center" style=" margin-top: 80px">
                        <div class="col-4 text-end">
                            <img src="img/task-1.png" class="img-fluid" style="position: absolute; top: -20px; right:10px; width: 150px; height: auto;">
                        </div>    

                        <div class="card custom-card" style="height: 80%; position: absolute;  left: 20px; background-color: #D6CAF1; border-radius: 10px; padding: 10px; width: 70%;">
                            <div class="card-body">
                                <h4 class="card-title fw-bold" style="font-size: 20px; text-align:right;margin-top: 35px;">Mahasiswa</h4>
                            </div>
                        </div>
                    </div>

                <!-- Tombol di bawah kiri -->
                <a href="{{ url('/daftarmahasiswa') }}">
                <button class="btn btn-light" style="position: absolute; bottom: 30px; left: 30px; background-color: #F9908A; border-radius: 10px; font-weight: bold; color: white; width:20%;">
                    Details
                </button>
                </a>
            </div>


            <div class="card mb-4 custom-card" style="position: relative;  overflow: hidden;">
                    <div class="d-flex justify-content-center align-items-center" style=" margin-top: 80px">
                        <div class="col-4 text-end">
                            <img src="img/task-1.png" class="img-fluid" style="position: absolute; top: -20px; right:10px; width: 150px; height: auto;">
                        </div>    

                        <div class="card custom-card" style="height: 80%; position: absolute;  left: 20px; background-color: #D6CAF1; border-radius: 10px; padding: 10px; width: 70%;">
                            <div class="card-body">
                                <h4 class="card-title fw-bold" style="font-size: 20px; text-align:right;margin-top: 35px;">Report</h4>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-light" style="position: absolute; bottom: 30px; left: 30px; background-color: #F9908A; border-radius: 10px; font-weight: bold; color: white; width:20%;">
                        Details
                    </button>
                </div>


            </div>

            <!-- Side Profile -->
            <div class="col-md-3 col-lg-3 mb-3">
                @include("Pembimbing/partial/sideprofile")
            </div>
        </div>
    </main>
</body>
</html>
