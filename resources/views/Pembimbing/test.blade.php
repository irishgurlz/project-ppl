<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perwalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E6E6FA;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #1A1A2E;
            color: #FFFFFF;
            min-height: 100vh;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .sidebar h2, .sidebar a {
            color: #FFFFFF;
            text-decoration: none;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: #FFFFFF;
            text-align: left;
        }
        .sidebar a:hover {
            background-color: #2E2E4D;
        }
        .table-container {
            background-color: #F5F5FF;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .status-approved {
            color: #4CAF50;
            font-weight: bold;
        }
        .status-approve {
            color: #555;
            font-weight: bold;
        }
        .status-rejected {
            color: #FF6347;
            font-weight: bold;
        }
        .pagination {
            justify-content: center;
        }
        .profile-container {
            background-color: #FFFFFF;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #000;
        }
        .profile-container img {
            width: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .profile-container .btn-details {
            background-color: #FF6B6B;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
        }
        .search-bar {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <!-- Sidebar -->
            <div class="col col-sm-12 col-md-2 col-lg-2">
                @include("partial/sidebar")
            </div>

            <!-- Main Content -->
            <div class="col col-md-7 col-lg-7 my-4">
                <h2 class="text-black">Perwalian</h2>
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>Mahasiswa Perwalian</h4>
                        <input type="text" class="form-control w-25" placeholder="Search...">
                    </div>
                    <table class="table">
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
                            <!-- Display a message if there's no data -->
                            <tr>
                                <td colspan="6" class="text-center">No data available</td>
                            </tr>
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

            <!-- Side Profile Section -->
            <div class="col col-md-3 col-lg-3 my-4">
                <nav class="navbar navbar-light pb-2">
                    <div class="search-bar">
                        <form class="d-flex justify-content-start">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 10px;">
                            <button class="btn btn-outline-success" type="submit" style="border-radius: 10px;">Search</button>
                        </form>
                    </div>
                </nav>
                <div class="profile-container">
                    <img src="{{ asset('img/profile.png') }}" style="width: 27%; display: block; margin: auto;" alt="Profile Picture">
                    <span class="badge rounded-pill bg-secondary mt-3">Pembimbing Akademik</span>
                    <h5 class="card-title" style="font-weight: bold;">Farisah Ghassani H</h5>
                    <p class="card-description">24060122140137</p>
                    <p class="card-description">ghassanifarisah01@gmail.com</p>
                    <p class="card-description">Fakultas Sains dan Matematika<br>Program Studi Informatika S1</p>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-details mt-4">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
