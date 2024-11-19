@extends('Bagian Akademik.alokasi.alokasi')
@section('content')
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
@endsection
