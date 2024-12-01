<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alokasi Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<main class="container-fluid my-0 p-0"> <!-- Menghapus padding -->
    <div class="row g-0"> <!-- g-0 untuk menghapus jarak antar kolom -->
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("partial/sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-6 col-lg-7 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Alokasi Ruangan</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="card-build d-flex flex-column justify-content-center align-items-center" style="width: 1065px; height: 785px; border-radius: 15px; background-color: white; padding:auto;">
                    <img src="img/building.png" style="width:150px; height: 120px;"alt="">
                    <div>Click details to alocate room</div>
                </div>

            </div>
        </div>
        
        <!-- Kolom 3 -->
        <div class="col col-sm-3 col-md-4 col-lg-3 d-flex flex-column justify-content-start p-2 d-none d-md-block" >
        <nav class="navbar navbar-light pb-2">
            <div>
                <form class="d-flex justify-content-start">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  style="border-radius: 10px;" >
                <button class="btn btn-outline-success" type="submit"  style="border-radius: 10px;" >Search</button>
                </form>
            </div>
        </nav>
        <div class="text-black bg-white pt-3" style="width:100%; height:94%; border-radius: 15px; margin: 0;text-align:center;">
        </div>
    </div>
</main>
</body>
</html>

