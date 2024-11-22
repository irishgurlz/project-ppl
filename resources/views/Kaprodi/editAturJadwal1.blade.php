<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editaturJadwal1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
    <body>
    <main class="container-fluid my-0 p-0"> 
        <div class="row g-0">
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
                @include("partial.Sidebar");
            </div>
            <div class="col-10 p-4 d-flex flex-column"> <!-- Gunakan flexbox untuk membuat layout column -->
            <h3 class="text-primary-emphasis">Atur Jadwal</h3>

            <div class="container-fluid mt-3 flex-grow-1 d-flex"> <!-- Atur card untuk memenuhi tinggi -->
                <div class="card w-100 d-flex flex-column" style="height: 100%;"> <!-- Membuat card full tinggi -->
                    <h4 class="p-4 text-primary-emphasis"><strong>Jadwal</strong></h4>
                    <div class="table-responsive flex-grow-1 p-2"> <!-- Agar tabel bisa stretch dengan card -->
                        <table class="table table-striped table-bordered text-center">
       
                            <!-- <h4 class="card-header bg-primary text-white text-center"><strong> ghh</strong></h4> -->
                            <table class="table table-bordered text-center mb-0">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>Kelas</th>
                                        <th>SKS</th>
                                        <th>Ruang</th>
                                        <th>Hari & Jam</th>
                                        <th>Nama Dosen</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                // Data sesuai dengan gambar
                                $jadwal = [
                                    [
                                        'no' => 1, 
                                        'kode' => 'PAIK6504', 
                                        'mata_kuliah' => 'PEMROGRAMAN BERBASIS PLATFORM', 
                                        'kelas' => 'D', 
                                        'sks' => 3, 
                                        'ruang' => 'E101', 
                                        'hari_jam' => 'Senin 07.00 - 09.30', 
                                        'dosen' => 'Sandy Kurniawan, S.Kom., M.Kom.'
                                    ],
                                    [
                                        'no' => 2, 
                                        'kode' => 'PAIK6504', 
                                        'mata_kuliah' => 'PROYEK PERANGKAT LUNAK', 
                                        'kelas' => 'D', 
                                        'sks' => 3, 
                                        'ruang' => 'A303', 
                                        'hari_jam' => 'Senin 13.00 - 15.30', 
                                        'dosen' => 'Dinar Mutiara Kusumo Nugraheni, S.T., M.InfoTech.(Comp), Ph.D.'
                                    ],
                                    [
                                        'no' => 3, 
                                        'kode' => 'PAIK6041', 
                                        'mata_kuliah' => 'INTERAKSI MANUSIA DAN KOMPUTER', 
                                        'kelas' => 'D', 
                                        'sks' => 3, 
                                        'ruang' => 'G306', 
                                        'hari_jam' => 'Selasa 09.40 - 11.20', 
                                        'dosen' => 'Yunila Dwi Putri Ariyanti, S.Kom., M.Kom.'
                                    ],
                                    [
                                        'no' => 4, 
                                        'kode' => 'MKIL1126', 
                                        'mata_kuliah' => 'SAINS KOMPUTASI', 
                                        'kelas' => 'D', 
                                        'sks' => 2, 
                                        'ruang' => 'L305', 
                                        'hari_jam' => 'Rabu 10.30 - 12.00', 
                                        'dosen' => 'Dr. Retno Kusumaningrum, S.Si., M.Kom.'
                                    ]
                                ];

                                foreach ($jadwal as $row) {
                                    echo "<tr>
                                            <td>{$row['no']}</td>
                                            <td>{$row['kode']}</td>
                                            <td>{$row['mata_kuliah']}</td>
                                            <td>{$row['kelas']}</td>
                                            <td>{$row['sks']}</td>
                                            <td>{$row['ruang']}</td>
                                            <td>{$row['hari_jam']}</td>
                                            <td>{$row['dosen']}</td>
                                            <td><a href='/editAturJadwal2' class='btn btn-primary btn-sm'>Edit</a></td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Previous</a>
                            <span>1</span>
                            <a href="#" class="btn btn-link">Next</a>
                        </div>
                    </div>
                </main>

                <!-- Script untuk Bootstrap -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                </body>
                </html>