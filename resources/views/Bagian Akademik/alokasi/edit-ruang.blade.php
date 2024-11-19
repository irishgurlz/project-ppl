@extends('Bagian Akademik.alokasi.alokasi')

@section('content')

<div class="container" style="height: 4%; margin-top:55px;">
    <div class="d-flex justify-content-center align-items-center" style="font-weight:bold;">Tambah Ruang</div>
</div>
<div class="d-flex justify-content-center align-items-start" style="height:100%; margin-top:2%;">
    <div class="d-flex justify-content-center align-items-center" style="width:50%; height:50%; border-radius:15px; background-color: #775E90">
        <form action="/akademik/ruang/{{$ruang->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Gedung
                </div>
                <select name="id_gedung" class="input-form">
                    <option value="" disabled {{ old('id_gedung', $ruang->id_gedung) === null ? 'selected' : '' }}>--Pilih Gedung--</option>
                    @forelse ($allGedung as $item)
                        <option value="{{$item->id}}" {{ old('id_gedung', $ruang->id_gedung) == $item->id ? 'selected' : '' }}>
                            {{$item->nama_gedung}}
                        </option>
                    @empty
                        <option value="">Tidak Ada Gedung</option>
                    @endforelse
                </select>
                
            </div>
            @error('id_gedung')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Nama Ruang
                </div>
                <input type="text" class="input-form" name="nama_ruang" style="border: none;" value="{{ old('nama_ruang', $ruang->nama_ruang) }}"> 
            </div>
            @error('nama_ruang')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Kapasitas
                </div>
                <input type="text" class="input-form" name="kapasitas" style="border: none;" value="{{ old('kapasitas', $ruang->kapasitas) }}"> 
            </div>
            @error('kapasitas')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Program Studi
                </div>
                <select name="id_program_studi" class="input-form">
                    <option value="" disabled {{ old('id_program_studi', $ruang->id_program_studi) === null ? 'selected' : '' }}>--Pilih Program Studi--</option>
                    @forelse ($program_studi as $item)
                        <option value="{{$item->id}}" {{ old('id_program_studi', $ruang->id_program_studi) == $item->id ? 'selected' : '' }}>
                            {{$item->nama_program_studi}}
                        </option>
                    @empty
                        <option value="">Tidak Ada Program Studi</option>
                    @endforelse
                </select>                
            </div>
            @error('id_program_studi')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="d-flex justify-content-end mt-3">
                <a href="/akademik/gedung/{{ $ruang->id_gedung }}" class="btn btn-cancel" style="width:25%;">Cancel</a>
                <button type="submit" class="btn btn-add ms-1" style="width:25%;">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection