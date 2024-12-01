<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #F9908A;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-left: 500px;
            cursor: pointer;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .title {
            margin-right: 10px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #DBDDF4;
            margin: 0;
            padding: 20px;
        }

        .notif-tabs {
            display: flex;
            justify-content: flex-start;
            border-bottom: 2px solid #ccc;
            margin-bottom: 10px;
        }

        .notif-tabs div {
            padding: 10px 20px;
            cursor: pointer;
            position: relative;
        }

        .notif-tabs div.active {
            font-weight: bold;
            border-bottom: 3px solid #007bff;
        }

        .semester-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .semester-item h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .see-details {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .see-details:hover {
            background-color: #0056b3;
        }

        .highlight {
            background-color: #90EE90 !important;
            color: white;
        }

        .info-section {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .info-section .row {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <!-- Kolom 1 (Sidebar) -->
            <div class="col col-sm-12 col-md-2 col-lg-2 p-1">
                @include("mahasiswa/partial/sidebar")
            </div>

            <!-- Kolom 2 (Notifikasi) -->
            <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
                <div class="d-flex justify-content-between align-items-center mb-0">
                    <div class="text-black column-title d-flex justify-content-start align-items-center">
                        <p class="fw-bold m-0 text-nowrap" style="color: #353E6C; font-size: 1.6rem;">Isian Rencana Studi (IRS)</p>
                    </div>
                    <form class="d-flex" style="width: 250px; margin-left: 750px;">
                        <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search" style="border-radius: 15px;">
                    </form>
                    <div class="profile-pic">
                        <a href="{{ route('profile') }}">
                            <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                        </a>
                    </div>
                </div>
                <div class="bg-white column-title d-flex flex-column" style="width: 98%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
                    <div class="notif-tabs">
                        <div id="buat-irs-tab" class="active" onclick="switchTab('buat-irs')">Buat IRS</div>
                        <div id="irs-tab" onclick="switchTab('irs')">IRS</div>
                    </div>
                    <div id="content">
                        <div id="irs" class="tab-content" style="display: none;">
                            <div class="semester-item">
                                <div>
                                    <h3>Semester - 1 | Tahun Ajaran 2022/2023 Ganjil</h3>
                                    <p>Jumlah SKS 21</p>
                                </div>
                                <a href="{{ route('cetakirs') }}" class="btn btn-primary">See Details</a>
                            </div>
                            <div class="semester-item">
                                <div>
                                    <h3>Semester - 2 | Tahun Ajaran 2022/2023 Ganjil</h3>
                                    <p>Jumlah SKS 21</p>
                                </div>
                                <a href="{{ route('cetakirs') }}" class="btn btn-primary">See Details</a>
                            </div>
                            <div class="semester-item">
                                <div>
                                    <h3>Semester - 3 | Tahun Ajaran 2023/2024 Ganjil</h3>
                                    <p>Jumlah SKS 21</p>
                                </div>
                                <a href="{{ route('cetakirs') }}" class="btn btn-primary">See Details</a>
                            </div>
                            <div class="semester-item">
                                <div>
                                    <h3>Semester - 4 | Tahun Ajaran 2023/2024 Ganjil</h3>
                                    <p>Jumlah SKS 21</p>
                                </div>
                                <a href="{{ route('cetakirs') }}" class="btn btn-primary">See Details</a>
                            </div>
                            <div class="semester-item">
                                <div>
                                    <h3>Semester - 5 | Tahun Ajaran 2024/2025 Ganjil</h3>
                                    <p>Jumlah SKS 21</p>
                                </div>
                                <a href="{{ route('cetakirs') }}" class="btn btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white column-title d-flex flex-column" style="width: 98%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
                        <div id="buat-irs" class="tab-content active">
                            <div class="info-section">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Nama:</strong> John Doe
                                    </div>
                                    <div class="col-md-6">
                                        <strong>NIM:</strong> 123456789
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Semester:</strong> 5
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Tahun Ajaran:</strong> 2024/2025
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>IPS/IPK:</strong> 3.75
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Beban SKS yang Bisa Diambil:</strong> 24 SKS
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center mb-3" style="width: 100%">
                                    <input type="text" class="form-control me-2" placeholder="Cari Mata Kuliah" aria-label="Search" style="background-color: #DBDDF4; color: black; flex: 2; min-width: 250px;">
                                    <select id="mataKuliah" class="input-form">
                                        <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                        @forelse ($mata_kuliah as $key => $item)
                                            <option value="{{$item->kodemk}}">
                                                <label for="">{{$item->nama_mata_kuliah}} {{$item->sks}} SKS</label> 
                                            </option>
                                        @empty
                                            <option value="">Data tidak ditemukan</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="circle" >
                                        <span>0 SKS</span>
                                    </div>
                                </div>
                            </div>
                            <div id="selected-courses">
                                <!-- Modal content -->
                            </div>
                            <div id="data-table">
                                <table class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
                                    <thead> 
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Ruang</th>
                                            <th>SKS</th>
                                            <th>Diambil</th>
                                            {{-- <th>Lihat Jadwal</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="jadwal-body">
                                        <!-- The rows will be dynamically filled here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function switchTab(tabId) {
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => tab.style.display = 'none');
            document.getElementById(tabId).style.display = 'block';

            const notifTabs = document.querySelectorAll('.notif-tabs div');
            notifTabs.forEach(tab => tab.classList.remove('active'));
            document.getElementById(tabId + '-tab').classList.add('active');
        }

       



        $(document).ready(function() {
        $('#mataKuliah').change(function() {
            const kodemk = $(this).val(); 

            if (kodemk) {
                getJadwal(kodemk);
            }
        });

        function getJadwal(kodemk) {
            $.ajax({
                url: '{{ route("getJadwal") }}',  
                method: 'GET',
                data: { kodemk: kodemk },
                success: function(response) {
                    console.log(response);
                    $('#jadwal-body').empty();

                    if (response.length > 0) {
                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        response.forEach((item, index) => {
                            $('#jadwal-body').append(`
                                <tr class="text-center">
                                    <td>${index + 1}</td>
                                    <td>${item.list_mata_kuliah?.nama_mata_kuliah}</td>
                                    <td>${item.hari}</td>
                                    <td>${item.jam_mulai}</td>
                                    <td>${item.jam_selesai}</td>
                                    <td>${item.id_ruang}</td>
                                    <td>${item.list_mata_kuliah?.sks}</td>
                                    <td>
                                        <form action="/mahasiswa/irs" method="post">
                                            <input type="hidden" name="_token" value="${csrfToken}">
                                            <input type="hidden" name="id_jadwal" value="${item.id}">
                                            <input type="hidden" name="kodemk" value="${item.kodemk}">
                                            <input type="hidden" name="hari" value="${item.hari}">
                                            <input type="hidden" name="jam_mulai" value="${item.jam_mulai}">
                                            <input type="hidden" name="jam_selesai" value="${item.jam_selesai}">
                                            <input type="hidden" name="sks" value="${item.list_mata_kuliah?.sks}">
                                            <input type="hidden" name="id_mahasiswa" id="mahasiswa" value="{{Auth::user()->id}}">
                                            <button type="submit" class="btn btn-detail-sm-2 me-1">Ambil</button>
                                        </form>
                                    </td>
                                </tr>
                            `);
                        });
                    } else {
                        $('#jadwal-body').append('<tr><td colspan="8" class="text-center">No data available</td></tr>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error Status: " + status);
                    console.error("Error Message: " + error);
                    console.error("XHR Response Text: " + xhr.responseText);
                }
            });
        }
    });

    </script>
</body>
</html>



