@extends('Dekan.atur jadwal.atur-jadwal')
@section('content')
<div class="container" style="margin-top: 50px; margin-left: 5%; margin-bottom: 30px;">
    <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px;">
        {{-- {{ $program_studi->nama_program_studi }} --}}
        Informatika
    </div>
    <div class="d-flex justify-content-between" style="width: 65%;">
        <div class="" style="width: 50%;">
            <div class="d-flex justify-content-start mt-2">Tahun Ajaran</div>
            <select class="input-form d-flex justify-content-start mt-2">
                <option value="" disabled selected>--Pilih Tahun Ajaran--</option>
                <option value="" >2022/2023</option>
                <option value="" >2023/2024</option>
                <option value="" >2024/2025</option>
            </select>
        </div>
        <div class="" style="width: 50%;">
            <div class="d-flex justify-content-start mt-2">Jenis Semester</div>
            <select class="input-form d-flex justify-content-start mt-2">
                <option value="" disabled selected>--Pilih Jenis Semester--</option>
                <option value="" >Ganjil</option>
                <option value="" >Genap</option>
            </select>
        </div>
    </div>

</div>


<div class="container" style="width:90%; margin-top:20px;">
    <table id="data-table" class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>Jenis</th>
                <th>SKS</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ($gedung->listRuang as $key => $item) --}}
                <tr class="text-center">
                    <td>1</td>
                    <td>Dasar Pemrograman</td>
                    <td>Wajib</td>
                    <td>3</td>
                    <td>
                        <span class="badge bg-dark">Menunggu</span>      
                    </td>
                    <td>
                        {{-- <div class="row d-flex justify-content-center g-0 bg-info"> --}}
                            <div class="col p-0 d-flex justify-content-center align-items-center">
                                <a href="/dekan/jadwal/program_studi/semester" class="btn btn-detail-sm-2 me-1">Details</a>

                                {{-- <a href="" style="padding: 0; margin: 0;">
                                    <img src="{{ asset('img/edit.png') }}" alt="" style="width: 24px; height: 24px;">
                                </a> --}}
                                {{-- <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" style="padding: 0; margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                        <img src="{{ asset('img/trash.png') }}" style="width: 24px; height: 24px;">
                                    </button>
                                </form> --}}
                            </div>
                        {{-- </div> --}}
                    </td>
                </tr>
            {{-- @empty --}}
                {{-- <tr>
                    <td colspan="6">Tidak ada data ruang</td>
                </tr> --}}
            {{-- @endforelse --}}
        </tbody>
    </table>
</div>
@endsection