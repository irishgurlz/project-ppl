@extends('Bagian Akademik.alokasi.alokasi')

@section('content')

<div class="container" style="height: 4%; margin-top:55px;">
    <div class="d-flex justify-content-center align-items-center" style="font-weight:bold;">Tambah Gedung</div>
</div>
<div class="d-flex justify-content-center align-items-start" style="height:100%; margin-top:2%;">
    <div class="d-flex justify-content-center align-items-center" style="width:50%; height:30%; border-radius:15px; background-color: #775E90">
        <form action="/akademik/gedung" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Nama Gedung
                </div>
                <input type="text" class="input-form" name="nama_gedung" style="border: none;"> 
            </div>
            @error('nama_gedung')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-end mt-3">
                <a href="javascript:history.back()" class="btn btn-cancel" style="width:25%;">Cancel</a>
                <button type="submit" class="btn btn-add ms-1" style="width:25%;">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection