<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body style="overflow:hidden;">

<!-- CONTENT -->
<main class="container-fluid my-3" style="overflow:hidden;">
    <div class="row">
        <!-- Kolom 1 -->
        <div class="col-sm-12 col-md-3 col-lg-2">
            @include("Pembimbing/partial/sidebar")
        </div>

        <!-- Kolom 2 - Main Content -->
        <div class="col-sm-12 col-md-6 col-lg-7 my-4 bg-white mx-auto" style="height:100%; border-radius:15px;">
            <div class="table-container" style="width: 100%;">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mt-5">Mahasiswa Perwalian</h4>
                    <input type="text" class="form-control w-25" placeholder="Search...">
                </div>
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $key => $value)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$value->actors->name}}</td>
                                <td>{{$value->NIM}}</td>
                                <td>{{$value->angkatan}}</td>
                                {{-- <td>5</td> --}}
                                <td><button class="btn-terima-sm-2 btn-sm">Approved</button></td>
                                <td>
                                    <!-- See Details button as a link -->
                                    <a href="{{ url('/irsApproved') }}" class="btn btn-link btn-sm">See Details</a>
                                </td>
                                @empty
                                    <td  colspan="6">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
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
