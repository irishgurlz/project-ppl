<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body style="overflow: hidden">

<!-- CONTENT -->
<main class="container-fluid my-3">
    <div class="row">
        <!-- Kolom 1 -->
        <div class=" col-sm-12 col-md-3 col-lg-2">
            {{-- <div class="bg-danger" style="height: 100%"> --}}
                @include("Pembimbing/partial/sidebar")
            {{-- </div> --}}
        </div>
        <!-- Kolom 2 -->
        <div class="col-sm-12 col-md-6 col-lg-7">
        <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Dashboard</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 15%; border-radius: 15px; margin: 0; position: relative;">
                <div style="padding:5%;">
                    <h3 class="card-title" style="font-weight: bold;">Welcome Back, {{$actor->name}}</h3>
                    <p class = "card-description d-none d-lg-block" style="padding-top:2%; font-size: 95%;">"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle."</p>
                </div>
                <img src="{{ asset('img/orang-1.png') }}" class="orang mb-0" alt="">
            </div>
            
            <div class="row my-4">
                <div class="mb-1 mx-1" style="color:#353E6C; font-weight: bold;">Task Board</div>
                <div class="col-sm-12 col-md-3 col-lg-6" style="width:100%">
                    @include("Pembimbing/partial/task")
                </div>
            </div>
        </div>
        <!-- Kolom 3 -->
        <div class="col-sm-12 col-md-3 col-lg-3">
            @include("Pembimbing/partial/sideprofile")
        </div>
    </div>
</main>

</body>
</html>
