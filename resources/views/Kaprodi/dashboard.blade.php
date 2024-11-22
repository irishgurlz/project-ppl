<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

<!-- CONTENT -->
<main class="container-fluid my-0 p-0"> 
    <div class="row g-0"> <!-- g-0 untuk menghapus jarak antar kolom -->
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("Kaprodi/partial/sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-6 col-lg-7 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Dashboard</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 24%; border-radius: 15px; margin: 0; position: relative;">
                <div style="padding:5%;">
                    <h3 class="card-title" style="font-weight: bold;">Welcome Back, Nandha Trimerdiani H</h3>
                    <p class = "card-description d-none d-md-block" style="padding-top:2%; font-size: 95%;">"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle."</p>
                </div>
                <img src="img/orang-1.png" class="orang mb-0" alt="">
            </div>
            <p class="fw-bold m-2">Task Board</p>

            <div class="sub-columns d-flex flex-column pt-2">
                <!-- Verifikasi IRS -->
                <div class="sub-column mb-3">
                    <div class="card d-flex flex-column p-3 h-100">
                        <div class="row">
                            <div class="col-2">
                                <img src="img/task-1.png" class="task img-fluid">
                            </div>
                            <div class="col-9">
                                <h5 class="fw-bold">Verifikasi IRS</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat ut voluptas fugiat!</p>
                                <div class="d-flex justify-content-end">
                                <button class="btn btn-details">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Atur Jadwal Kuliah -->
                <div class="sub-column mb-3">
                    <div class="card d-flex flex-column p-3 h-100">
                        <div class="row">
                            <div class="col-2">
                                <img src="img/task-1.png" class="task img-fluid">
                            </div>
                            <div class="col-9">
                                <h5 class="fw-bold">Atur Jadwal Kuliah</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat ut voluptas fugiat!</p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-details">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Input Matkul -->
                <div class="sub-column mb-3">
                    <div class="card d-flex flex-column p-3 h-100">
                        <div class="row">
                            <div class="col-2">
                                <img src="img/task-1.png" class="task img-fluid">
                            </div>
                            <div class="col-9">
                                <h5 class="fw-bold">Input Mata Kuliah</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat ut voluptas fugiat!</p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-details">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom 3 -->
        <div class="col col-sm-3 col-md-4 col-lg-3 d-flex flex-column justify-content-start p-2 d-none d-md-block">
            @include("Kaprodi/partial/sideprofile")
        </div>
    </div>
</main>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
