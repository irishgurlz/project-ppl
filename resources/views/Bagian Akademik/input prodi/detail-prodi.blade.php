@extends('Bagian Akademik.input prodi.input-prodi')

@section('content')

<div class="d-flex justify-content-end mt-5">
  <button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#modal-create" style="width:15%; margin-right: 6%;">
    Tambah Program Studi
  </button>
</div>

<div class="container" style="width:90%;margin-top:20px;">
    <table id="data-table"  class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
      <thead>
        <tr class="text-center">
          <th>No</th>
          <th>Nama Program studi</th>
          {{-- <th>Total Mahasiswa</th> --}}
          <th>Ketua Program Studi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($program_studi as $key => $value)
          <tr class="text-center">
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama_program_studi }}</td>
            {{-- <td>{{ $value->total_mahasiswa }}</td> --}}
            <td> 
              <span class="badge rounded-pill bg-secondary">
                {{ $value->ketua_program_studi->dosen->nama_dosen }} </span>
            </td>
            <td>

              <div class="row d-flex justify-content-start g-0">
                <div class="col p-0 d-flex align-items-center">
                    <a href="/akademik/program_studi/{{ $value->id }}/edit" style="padding: 0; margin: 0;">
                        <img src="{{ asset('img/edit.png') }}" alt="" style="width: 24px; height: 24px;">
                    </a>
                    {{-- <form action="/akademik/program_studi/{{ $value->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" style="padding: 0; margin: 0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                            <img src="{{ asset('img/trash.png') }}" style="width: 24px; height: 24px;">
                        </button>
                    </form> --}}
                </div>
            </div>
            
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3">Tidak ada data</td>
          </tr>            
        @endforelse
      </tbody>
    </table>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-5">
      <li class="page-item disabled">
        <a class="page-link">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
@endsection