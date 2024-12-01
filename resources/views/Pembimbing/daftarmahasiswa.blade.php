<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container-fluid {
            margin-top: 30px;
        }
        .table-container {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
        }
        .status-btn {
    border-radius: 50px;
    padding: 3px 10px; /* Adjusted padding for smaller buttons */
    font-weight: bold;
    color: #fff;
    border: none;
    font-size: 0.8rem; /* Smaller font size */
}

.approved-status {
    background-color: #EBF9F1; /* Light Green */
    font-size: 0.7rem; /* Smaller text for 'Approved' status */
    color: #1F9254;
}

.rejected-status {
    background-color: #FBE7E8; /* Light Red */
    color: #A30D11;
    font-size: 0.7rem;
}

.pending-status {
    background-color: #8F8F8F; /* Gray */
    color: #333;
    font-size: 0.7rem;
}
       /* Centering pagination */
.pagination {
    justify-content: center;
}

.pagination .page-link {
    font-size: 0.9rem; /* Slightly smaller pagination links */
}

        .pagination .page-item {
            cursor: pointer;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table .table-secondary th {
            background-color: #f1f1f1;
        }
        .table .table-secondary td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<!-- CONTENT -->
<main class="container-fluid my-3">
    <div class="row">
        <!-- Kolom 1 (Sidebar) -->
        <div class="col-sm-12 col-md-3 col-lg-2">
            @include("Pembimbing/partial/sidebar")
        </div>

        <!-- Kolom 2 (Main Content) -->
        <div class="col-sm-12 col-md-6 col-lg-7 my-4 bg-white mx-auto" style="height:90%; border-radius:15px;">
            <div class="table-container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Daftar Mahasiswa</h4>
                    <input type="text" class="form-control w-25" placeholder="Search...">
                </div>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sabrina Carpenter</td>
                            <td>24060122140115</td>
                            <td>5</td>
                            <td><button class="status-btn approved-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Syaira Hasna</td>
                            <td>2406012213057</td>
                            <td>5</td>
                            <td><button class="status-btn rejected-status btn-sm">Non-Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Safira Malika</td>
                            <td>2406012212176</td>
                            <td>5</td>
                            <td><button class="status-btn approved-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Qeisha Aulia</td>
                            <td>2406012214018</td>
                            <td>5</td>
                            <td><button class="status-btn rejected-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Demas Myers</td>
                            <td>24060122130111</td>
                            <td>5</td>
                            <td><button class="status-btn approved-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Andira</td>
                            <td>2406012213089</td>
                            <td>5</td>
                            <td><button class="status-btn rejected-status btn-sm">Non-Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Tasya</td>
                            <td>2406012212054</td>
                            <td>5</td>
                            <td><button class="status-btn rejected-status btn-sm">Non-Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Sonny</td>
                            <td>2406012212371</td>
                            <td>5</td>
                            <td><button class="status-btn approved-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Angel</td>
                            <td>24060122140155</td>
                            <td>5</td>
                            <td><button class="status-btn rejected-status btn-sm">Aktif</button></td>
                            <td><a href="{{ url('/mahasiswaKHS') }}" class="btn btn-link btn-sm">See Details</a></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Kolom 3 (Sidebar/Side Profile) -->
        <div class="col-sm-12 col-md-3 col-lg-3">
            @include("Pembimbing/partial/sideprofile")
        </div>
    </div>
</main>

</body>
</html>
