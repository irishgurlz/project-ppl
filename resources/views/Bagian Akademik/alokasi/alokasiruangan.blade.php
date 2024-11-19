<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alokasi Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0"> 
        <!-- Kolom 1 -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("Bagian Akademik/partial/sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-6 col-lg-7 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex aling-items-end m-2">Alokasi Ruangan</p>
            </div>
            <div class="bg-white column-title d-flex justify-content-between" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                <div style="width: 1065px; height: 785px; border-radius: 15px; background-color: white; padding:auto;">
                    <div class="container" style="margin-top: 50px; margin-left: 5%;">
                        <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px;">
                            Gedung {{ $gedung->nama_gedung }}
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-5">
                        <button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#modal-ruang" style="width:15%; margin-right: 6%;">
                          Tambah Ruang
                        </button>
                      </div>
                    <div class="container" style="width:90%; margin-top:20px;">
                        <table id="data-table" class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
                            <thead>
                                <tr >
                                    <th>No</th>
                                    <th>Nama Ruang</th>
                                    <th>Kapasitas</th>
                                    <th>Program Studi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($gedung->listRuang as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama_ruang }}</td>
                                        <td>{{ $item->kapasitas }}</td>
                                        <td class="">
                                            <span class="badge rounded-pill bg-secondary"> {{ $item->programStudi->nama_program_studi }}</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill {{ $item->status == 1 ? 'bg-success' : ($item->status == 2 ? 'bg-danger' : 'bg-warning') }}">
                                                {{ $item->status == 1 ? 'Diterima' : ($item->status == 2 ? 'Ditolak' : 'Menunggu') }}
                                        </td>
                                        <td>
                                            <div class="row d-flex justify-content-start g-0">
                                                <div class="col p-0 d-flex align-items-center">
                                                    <a href="/akademik/ruang/{{ $item->id }}/edit" style="padding: 0; margin: 0;">
                                                        <img src="{{ asset('img/edit.png') }}" alt="" style="width: 24px; height: 24px;">
                                                    </a>
                                                    <form action="/akademik/ruang/{{ $item->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" style="padding: 0; margin: 0;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                                            <img src="{{ asset('img/trash.png') }}" style="width: 24px; height: 24px;">
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">Tidak ada data ruang</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kolom 3 -->
        <div class="col col-sm-3 col-md-4 col-lg-3 d-flex flex-column justify-content-start p-2 d-none d-md-block">
            {{-- search --}}
            <nav class="navbar navbar-light pb-2">
                <div>
                    <form class="d-flex justify-content-start">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 10px;">
                        <button class="btn btn-outline-success" type="submit" style="border-radius: 10px;">Search</button>
                    </form>
                </div>
            </nav>
            {{-- list gedung --}}
            <div class="data bg-white pt-4 ps-5 pe-5" style="width:100%; height:94%; border-radius: 15px; margin: 0; text-align:center;">
                <div class="d-flex justify-content-start">
                    <img src="{{ asset('img/select.png') }}" style="width:15%;" alt="gambar">
                    <div class="m-2 d-flex align-items-center" style="font-weight:bold;">Pilih Gedung</div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#modal-add">
                      Tambah
                    </button>
                </div>
                @forelse ($allGedung as $item)
                    <div class="option d-flex justify-content-between align-items-center mt-2">
                        <div class="text-white ms-3">Gedung {{ $item->nama_gedung }}</div>
                        <div class="d-flex justify-content-end">
                            <form action="/akademik/gedung/{{ $item->id }}" method="POST" class="d-flex align-items-center">
                                @csrf
                                @method('DELETE')
                                <a href="/akademik/gedung/{{ $item->id }}" class="btn btn-detail-sm-1 me-1">Details</a>
                                <input type="submit" value="Delete" class="btn btn-delete-sm-1 me-2">
                            </form>
                        </div>                        
                    </div>
                @empty
                    <div class="option d-flex justify-content-between align-items-center mt-2">
                        <div class="text-white ms-3">Belum Ada Gedung</div>
                    </div>
                @endforelse
            
            </div>
        </div>
        
    </div>
</main>
@include('components.modal-add')
@include('components.modal-ruang')
</body>
</html> 