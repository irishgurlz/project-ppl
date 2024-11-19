<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alokasi Ruangan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0">
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-4 col-lg-2 p-2 d-none d-md-block">
            @include("Bagian Akademik/partial/sidebar")
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%;height: 5%;font-weight: bold; border-radius: 5px;">
                <p class="d-flex align-items-end m-2">Input Program Studi</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 100%; border-radius: 15px;margin: 0; position: relative">
                <div style="width: 95%;height: 90%; border-radius: 15px; background-color: white; padding:auto;">
                    <!-- Content from your Blade template -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Include Modal -->
@include('components.modal-create')
</body>
</html>
