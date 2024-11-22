<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        body {
            background-color: #e6e8ff; /* Light purple background */
        }
        .main-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            width: 160px;
            height: 200px;
            /* object-fit: cover; */
            /* border-radius: 10%;  */
            margin-top: 10px;
        }
        .profile-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
       
       
    </style>

    <body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
                @include("partial.Sidebar");
            </div>

        <!-- Main Content -->
         <!-- Kolom 2 -->
         <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Profile</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                   
                <div class="card w-100 d-flex flex-column" style="height: 100%;"> <!-- Membuat card full tinggi -->
                    <h4 class="p-4 text-primary-emphasis" style="text-align: center;"><strong>Edit - account profile</strong></h4>
                    <div class="table-responsive flex-grow-1 p-2"> <!-- Agar tabel bisa stretch dengan card -->
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <!-- No content needed in the thead as per your design requirements -->
                                <thead>
</thead>
<tbody>
    <thead>
</thead>
<tbody>
    <tr>
        <td colspan="2">
            <!-- Important Info Alert -->
            <div class="alert alert-danger text-start">
                <strong>Info Penting</strong> Data nomor telepon ini akan disimpan kerahasiaannya oleh pihak Undip
            </div>
        </td>
    </tr>
    <tr>
    <td colspan="2">
    <!-- Form Layout with Right Alignment and Left Margin -->
    <div class="d-flex justify-content-end me-4"> <!-- Added right alignment and left margin -->
    <div class="me-4">
        <img src="{{ $user->profile_image ?? asset('img/profile.png') }}" 
                 alt="Profile Picture" 
                 class="img-fluid rounded-circle"
                 style="width: 80px; height: 80px; object-fit: cover;">
        </div>
        <form class="row g-3" style="width: 80%;"> <!-- Adjust width to reduce form size -->
            <div class="col-md-6">
                <label for="inputName" class="form-label text-start d-block">Name</label>
                <input type="text" class="form-control" id="inputName" style="background-color: #f5e7e7;">
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label text-start d-block">Address</label>
                <input type="text" class="form-control" id="inputAddress" style="background-color: #f5e7e7;">
            </div>
            <div class="col-md-6">
                <label for="inputIdentity" class="form-label text-start d-block">Identity</label>
                <input type="text" class="form-control" id="inputIdentity" style="background-color: #f5e7e7;">
            </div>
            <div class="col-md-6">
                <label for="inputMobile" class="form-label text-start d-block">Mobile Phone</label>
                <input type="text" class="form-control" id="inputMobile" style="background-color: #f5e7e7;">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label text-start d-block">Email</label>
                <input type="email" class="form-control" id="inputEmail" style="background-color: #f5e7e7;">
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="button" class="btn btn-danger">Save</button>
            </div>
        </form>
    </div>
</td>
