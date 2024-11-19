<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<!-- CONTENT -->
<main class="container-fluid my-0 p-0"> <!-- Menghapus padding -->
    <div class="row g-0"> <!-- g-0 untuk menghapus jarak antar kolom -->
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("Dekan/partial/sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-6 col-lg-7 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Dashboard</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 24%; border-radius: 15px; margin: 0; position: relative;">
                <div style="padding:5%;">
                    <h3 class="card-title" style="font-weight: bold;">Welcome Back, Aniqah Nursabrina</h3>
                    <p class = "card-description d-none d-lg-block" style="padding-top:2%; font-size: 95%;">"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle."</p>
                </div>
                <img src="{{ asset('img/orang-1.png') }}" class="orang mb-0" alt="">
            </div> 
            {{-- <div>Task Board</div> --}}
            <div class="sub-columns d-flex flex-column flex-md-row justify-content-between pt-2">
            <div class="sub-column d-flex flex-column " style="padding: 2%;">
                <div class="row">
                    <div class="col col-3">
                        <img src="{{ asset('img/task-1.png') }}" class="task">
                    </div>

                    {{-- kolom 2A --}}
                    <div class="col col-9">
                        <div class="row">
                            <div class="col-12 ">
                                <div style="font-weight: bold;">Alokasi Ruangan</div>
                            </div>
                            <div class="col-12 pt-4 d-flex justify-content-end">
                                    <a href="/ruang" class="btn btn-details">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-column d-flex flex-column " style="padding: 2%;">
            <div class="row">
                <div class="col col-3">
                    <img src="{{ asset('img/task-2.png') }}" class="task">
                </div>

                {{-- kolom 2B --}}
                <div class="col col-9">
                    <div class="row">
                        <!-- Row pertama dalam kolom kedua -->
                        <div class="col-12 ">
                            <div style="font-weight: bold;">Atur Jadwal Kuliah</div>
                        </div>
                        <!-- Row kedua dalam kolom kedua -->
                        <div class="col-12 pt-4 d-flex justify-content-end">
                            {{-- <div> --}}
                                <a href="/program_studi" class="btn btn-details">Details</a>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

            </div>


        </div>
        <!-- Kolom 3 -->
        <div class="col col-sm-3 col-md-4 col-lg-3 d-flex flex-column justify-content-start p-2 d-none d-md-block">
            @include("Dekan/partial/sideprofile");
        </div>
    </div>
</main>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
