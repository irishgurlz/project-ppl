<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inputMataKuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        .custom-card {
            background-color: #775E90;
            min-height: 60vh;
            width: 60vw;
            margin: 0;
            padding: 20px 20px 50px;
            border-radius: 15px;
        }

        .custom-card label {
            color: white;
        }

        .custom-btn {
            width: 100px;
        }

        body {
            background-color: #f0f4ff;
            min-height: 100vh;
            width: 100%;
            margin: 0;
            padding-bottom: 100px;
        }
    </style>
</head>

<body>
    <main class="container-fluid my-0 p-0">
        <div class="row g-0">
            <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
                @include("Kaprodi.partial.Sidebar");
            </div>
            <!-- Kolom 2 -->
            <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
                <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                    <p class="d-flex align-items-end m-2">Input Mata Kuliah </p>
                </div>
                <div class="bg-white column-title d-flex justify-content-center align-items-center" style="width:100%; height: 100%; border-radius: 15px; margin: 0; position: relative;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="width: 95%; height: 90%; border-radius: 15px; padding:auto;">
                        <!-- kolom 3 -->
                        <div class="container my-5">
                            <h3 class="text-center mb-4">Input Mata Kuliah</h3>
                            <div class="d-flex justify-content-center">
                                <div class="custom-card shadow-lg">
                                    <form action="/kaprodi/mata_kuliah" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Form Kode Mata Kuliah -->
                                        <div class="row mb-3 align-items-center">
                                            <label for="kodeMataKuliah" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kodemk" class="input-form" style="width:100%" id="kodeMataKuliah">
                                                @error('kodemk')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Mata Kuliah -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Mata Kuliah</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_mata_kuliah" class="input-form" style="width:100%" id="MataKuliah">
                                                @error('nama_mata_kuliah')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form SKS -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">SKS</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="input-form" name="sks" style="width:100%" id="sks">
                                                @error('sks')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Dosen 2 -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Prodi</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="3" id="program_studi" name="id_program_studi">
                                                {{-- <select name="program_studi" class="input-form" style="width:100%">
                                                    <option value="" disabled selected>-Pilih Prodi</option>
                                                    @forelse ($program_studi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_program_studi }}</option>
                                                    @empty
                                                    <option value="">Tidak Ada Dosen</option>
                                                    @endforelse
                                                </select> --}}
                                                {{-- @error('dosen2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror --}}
                                            </div>
                                        </div>

                                        <!-- Form Dosen 1 -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Dosen 1</label>
                                            <div class="col-sm-10">
                                                <select id="dosen1" name="nidn_dosen_1" class="input-form" style="width:100%">
                                                    <option value="" disabled selected>-Pilih Dosen</option>
                                                    @forelse ($dosen as $item)
                                                    <option value="{{ $item->nidn }}">{{ $item->nama_dosen }}</option>
                                                    @empty
                                                    <option value="">Tidak Ada Dosen</option>
                                                    @endforelse
                                                </select>
                                                @error('nidn_dosen_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Dosen 2 -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Dosen 2</label>
                                            <div class="col-sm-10">
                                                <select id="dosen2" name="nidn_dosen_2" class="input-form" style="width:100%">
                                                    <option value="" disabled selected>-Pilih Dosen</option>
                                                    @forelse ($dosen as $item)
                                                    <option value="{{ $item->nidn }}">{{ $item->nama_dosen }}</option>
                                                    @empty
                                                    <option value="">Tidak Ada Dosen</option>
                                                    @endforelse
                                                </select>
                                                @error('nidn_dosen_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Dosen 3 -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Dosen 3</label>
                                            <div class="col-sm-10">
                                                <select id="dosen3" name="nidn_dosen_3" class="input-form" style="width:100%">
                                                    <option value="" disabled selected>-Pilih Dosen</option>
                                                    @forelse ($dosen as $item)
                                                    <option value="{{ $item->nidn }}">{{ $item->nama_dosen }}</option>
                                                    @empty
                                                    <option value="">Tidak Ada Dosen</option>
                                                    @endforelse
                                                </select>
                                                @error('nidn_dosen_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Semester -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Semester</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="input-form" style="width:100%" name="semester" id="semester">
                                                @error('semester')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Jenis Mata Kuliah -->
                                        <div class="row mb-3 align-items-center">
                                            <label class="col-sm-2 col-form-label">Jenis Mata Kuliah</label>
                                            <div class="col-sm-10 d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="jenis_mata_kuliah" id="jenisWajib" value="Wajib">
                                                    <label class="form-check-label">
                                                        Wajib
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_mata_kuliah" id="jenisPilihan" value="Pilihan">
                                                    <label class="form-check-label" >
                                                        Pilihan
                                                    </label>
                                                </div>
                                            </div>
                                            @error('jenis_mata_kuliah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Buttons -->
                                        <div class="d-flex justify-content-center mt-3">
                                            <a href="javascript:history.back()" class="btn btn-cancel" style="width:25%;">Cancel</a>
                                            <button type="submit" class="btn btn-add ms-1" style="width:25%;">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
