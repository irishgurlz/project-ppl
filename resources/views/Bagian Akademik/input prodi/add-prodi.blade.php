@extends('Bagian Akademik.input prodi.input-prodi')


@section('content')
<div class="container" style="height: 4%; margin-top:55px;">
    <div class="d-flex justify-content-center align-items-center" style="font-weight:bold;">Tambah Program Studi</div>
</div>
<div class="d-flex justify-content-center align-items-start" style="height:100%; margin-top:2%;">
    <div class="d-flex justify-content-center align-items-center" style="width:40%; height:55%; border-radius:15px; background-color: #775E90">
        <form action="/akademik/program_studi" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Nama Program Studi
                </div>
                <input type="text" class="input-form" name="nama_program_studi" style="border: none;"> 
            </div>
            @error('nama_program_studi')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            {{-- <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Total Mahasiswa
                </div>
                <input type="text" name="total_mahasiswa" class="input-form" style="border: none;"> 
            </div>
            @error('total_mahasiswa')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror --}}
            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Ketua Program Studi
                </div>
                <input type="text" name="ketua_program_studi" class="input-form" style="border: none;"> 
            </div>
            @error('ketua_program_studi')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="d-flex justify-content-end mt-3">
                <a href="/akademik/program_studi" class="btn btn-cancel" style="width:25%;">Cancel</a>
                <button type="submit" class="btn btn-add ms-1" style="width:25%;">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection