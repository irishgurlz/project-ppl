@extends('Bagian Akademik.input prodi.input-prodi')


@section('content')
<div class="container" style="height: 4%; margin-top:55px;">
    <div class="d-flex justify-content-center align-items-center" style="font-weight:bold;">Tambah Program Studi</div>
</div>
<div class="d-flex justify-content-center align-items-start" style="height:100%; margin-top:2%;">
    <div class="d-flex justify-content-center align-items-center" style="width:40%; height:55%; border-radius:15px; background-color: #775E90">
        <form action="/akademik/program_studi/{{ $program_studi->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mt-2 d-flex justify-content-between">
                <div class="me-3 text-white">
                    Nama Program Studi
                </div>
                <input type="text" class="input-form" name="nama_program_studi" style="border: none;" value="{{ old('nama_program_studi', $program_studi->nama_program_studi) }}"> 
            </div>
            @error('nama_program_studi')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            {{-- <div class="mb-3 mt-3">
                <label for="id_ketua_program_studi" class="form-label text-white me-3">Ketua Program Studi</label>
                <select name="id_ketua_program_studi" id="id_ketua_program_studi" class="input-form" >
                    <option value="" disabled selected>--Pilih Ketua Program Studi--</option>
                    @forelse ($ketua_program_studi as $item)
                        <option value="{{$item->id}}">{{$item->dosen->nama_dosen}}</option>
                    @empty
                        <option value="">Tidak Ada Ketua Program Studi</option>
                    @endforelse
                </select>
                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-id_ketua_program_studi"></div>
            </div>
            @error('id_ketua_program_studi')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror --}}
            <div class="d-flex justify-content-end mt-3">
                <a href="/akademik/program_studi" class="btn btn-cancel" style="width:25%;">Cancel</a>
                <button type="submit" class="btn btn-add ms-1" style="width:25%;">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection