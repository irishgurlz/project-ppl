<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        .circle {
            width: 80px; /* Ukuran lingkaran */
            height: 80px; /* Ukuran lingkaran */
            border-radius: 50%; /* Membuat lingkaran */
            background-color: #F9908A; /* Warna latar belakang */
            color: white; /* Warna teks */
            display: flex; /* Untuk menggunakan flexbox */
            justify-content: center; /* Untuk menengahkan konten horizontal */
            align-items: center; /* Untuk menengahkan konten vertikal */
            font-weight: bold; /* Ketebalan font */
            margin-left: 700px; /* Spasi di sebelah kiri */
            cursor: pointer;
        }

        .container {
            display: flex; /* Menggunakan flexbox */
            align-items: center; /* Sejajarkan elemen secara vertikal */
            justify-content: space-between; /* Jarak antar elemen */
        }
        .title {
            margin-right: 10px; /* Spasi antara judul dan lingkaran */
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
        /* Style for semester items */
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
            background-color:  #90EE90 !important;
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
                    <p class="fw-bold m-0 text-nowrap" style=" color: #353E6C; font-size: 1.6rem;">Isian Rencana Studi (IRS)</p>
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
            <div class="bg-white column-title d-flex flex-column" style="width:98%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
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
    <div class="bg-white column-title d-flex flex-column" style="width:98%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
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

            <!-- Search bar and SKS total -->
            <div class="mb-3">
    <div class="d-flex align-items-center mb-3" style="width: 100%">
        <!-- Search Bar -->
        <input type="text" class="form-control me-2" placeholder="Cari Mata Kuliah" aria-label="Search" style="background-color: #DBDDF4; color: black; flex: 2; min-width: 250px;">
        
        <!-- Dropdown Mata Kuliah -->
      
        {{-- <option value="" selected>Pilih Mata Kuliah</option>
        <option value="sesi-1-senin">Matematika Diskrit</option>
        <option value="sesi-2-selasa">Pemrograman Lanjut</option>
        <option value="sesi-3-rabu">Sistem Operasi</option>
        <option value="sesi-4-kamis">Jaringan Komputer</option> --}}
        <select id="mataKuliah" class="form-select">

            <option value="" disabled selected>--Pilih Mata Kuliah--</option>
            @forelse ($mata_kuliah as $key => $item)
                <option value="">{{$item->nama_mata_kuliah}}</option>
            @empty
                <option value="">Tidak Ada Program Studi</option>
            @endforelse
        </select>
        {{-- </div> --}}

        <!-- Total SKS Circle -->
        <a class="total-sks" style="text-decoration: none;">
            <div class="circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                0 SKS
            </div>
        </a>
    </div>
</div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Daftar Mata Kuliah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Daftar Mata Kuliah yang sudah dipilih, Anda dapat melakukan pembatalan dan penggantian Mata Kuliah</p>
                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SMT</th>
                                            <th>KELAS</th>
                                            <th>STATUS</th>
                                            <th>SKS</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pengembangan Berbasis Platform</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>4</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(1)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(1)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Komputasi Tersebar dan Paralel</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>4</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(2)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(2)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sistem Informasi</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>3</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(3)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(3)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Proyek Perangkat Lunak</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>4</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(4)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(4)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Teori Bahasa dan Otomata</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>3</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(5)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(5)">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Pembelajaran Mesin</td>
                                            <td>5</td>
                                            <td>A</td>
                                            <td>BARU</td>
                                            <td>3</td>
                                            <td>
                                                <img src="img/edit.png" alt="Edit" style="width: 20px; height: 20px; cursor: pointer;" title="Edit" onclick="editFunction(6)">
                                            </td>
                                            <td>
                                                <img src="img/delete.png" alt="Hapus" style="width: 20px; height: 20px; cursor: pointer;" title="Hapus" onclick="deleteFunction(6)">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="total-sks">
                                    TOTAL SKS:
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Table -->
           <table class="table table-bordered table-striped mt-3">
            <thead class="table-light">
                <tr>
                    <th>Waktu</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <!-- Waktu 06:00 - 07:00 -->
                <tr>
                    <td>06:00 - 07:00</td>
                    <td id="sesi-1-Senin" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 07:00 - 08:00 -->
                <tr>
                    <td>07:00 - 08:00</td>
                    <td id="sesi-10:00-12:00-Senin" class="timetable-cell" data-mata-kuliah=""></td>
                    <td id="sesi-2-Selasa" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 08:00 - 09:00 -->
                <tr>
                    <td>08:00 - 09:00</td>
                    <td id="sesi-3-Senin" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td id="sesi-3-Rabu" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 09:00 - 10:00 -->
                <tr>
                    <td>09:00 - 10:00</td>
                    <td id="sesi-4-Senin" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td></td>
                    <td id="sesi-4-Kamis" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                </tr>
                <!-- Waktu 10:00 - 11:00 -->
                <tr>
                    <td>10:00 - 11:00</td>
                    <td id="sesi-5-Senin" class="timetable-cell" data-mata-kuliah=""></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="sesi-5-Jumat" class="timetable-cell" data-mata-kuliah=""></td>
                </tr>
                <!-- Waktu 11:00 - 12:00 -->
                <tr>
                    <td>11:00 - 12:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 12:00 - 13:00 -->
                <tr>
                    <td>12:00 - 13:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 13:00 - 14:00 -->
                <tr>
                    <td>13:00 - 14:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 14:00 - 15:00 -->
                <tr>
                    <td>14:00 - 15:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 15:00 - 16:00 -->
                <tr>
                    <td>15:00 - 16:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 16:00 - 17:00 -->
                <tr>
                    <td>16:00 - 17:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Waktu 17:00 - 18:00 -->
                <tr>
                    <td>17:00 - 18:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </main>

    <script>
        // Event listener untuk dropdown
        document.getElementById('mataKuliah').addEventListener('change', function () {
            const selectedValue = this.value;

            // Jika ada value yang dipilih
            if (selectedValue) {
                // Cari cell berdasarkan ID yang dipilih
                const targetCell = document.getElementById(selectedValue);

                // Set teks mata kuliah pada cell yang sesuai, hanya jika cell tersebut kosong
                if (targetCell && targetCell.textContent === '') {
                    targetCell.textContent = this.options[this.selectedIndex].text;
                    targetCell.setAttribute('data-mata-kuliah', this.options[this.selectedIndex].text);
                }
            }
        });

        // Event listener untuk memilih cell pada time table
        const timetableCells = document.querySelectorAll('.timetable-cell');
        timetableCells.forEach(cell => {
            cell.addEventListener('click', function () {
                // Jika cell berisi mata kuliah
                if (this.getAttribute('data-mata-kuliah')) {
                    this.classList.toggle('highlight');
                }
            });
        });
    </script>

            </div>
        </div>
    </div>
</div>

<script>
function editFunction(id) {
    alert("Edit mata kuliah dengan ID: " + id);
}

function deleteFunction(id) {
    if (confirm("Anda yakin ingin menghapus mata kuliah dengan ID: " + id + "?")) {
        alert("Mata kuliah dengan ID: " + id + " telah dihapus.");
    }
}
</script>

<script>
    // Fungsi untuk berpindah antara tab
    function switchTab(tabName) {
        // Hapus kelas 'active' dari semua tab dan konten tab
        document.getElementById('buat-irs-tab').classList.remove('active');
        document.getElementById('irs-tab').classList.remove('active');
        document.getElementById('buat-irs').style.display = 'none';
        document.getElementById('irs').style.display = 'none';

        // Tambahkan kelas 'active' ke tab yang dipilih
        document.getElementById(tabName + '-tab').classList.add('active');
        document.getElementById(tabName).style.display = 'block';
    }
</script>

<!-- <script>
    document.querySelectorAll('.pilih-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var row = this.closest('td');
            
            // Jika tombol "Pilih" diklik
            if (this.style.backgroundColor === 'rgb(143, 143, 143)') {
                this.style.backgroundColor = '#1FC16A';
                this.textContent = 'Terpilih';
                
                // Ubah warna latar belakang kolom yang dipilih
                row.style.backgroundColor = '#90FF96';
            }
            // Jika tombol "Pilih" sudah terpilih, maka tidak bisa dipilih lagi
            else if (this.textContent === 'Terpilih') {
                alert('Mata kuliah ini sudah dipilih.');
            }
            // Jika status penuh
            else if (row.classList.contains('full')) {
                this.style.backgroundColor = '#8F8F8F';
                this.textContent = 'Penuh';
            }
        });
    });
</script> -->
</main>

</body>
</html>
