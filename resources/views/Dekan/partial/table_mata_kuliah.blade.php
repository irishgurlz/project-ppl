<table class="table table-striped mt-3" style="border-radius: 10px;">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Nama Mata Kuliah</th>
            <th>Jenis</th>
            <th>SKS</th>
            <th>Semester</th>
            {{-- <th>Status</th> --}}
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($mata_kuliah as $key => $value)
            <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{$value->nama_mata_kuliah}}</td>
                <td>{{$value->jenis_mata_kuliah}}</td>
                <td>{{$value->sks}}</td>
                <td>{{$value->semester}}</td>
                {{-- <td>
                    <span class="badge rounded-pill {{ $value->status == 1 ? 'bg-success' : ($value->status == 2 ? 'bg-danger' : 'bg-warning') }}">
                        {{ $value->status == 1 ? 'Diterima' : ($value->status == 2 ? 'Ditolak' : 'Menunggu') }}     
                </td> --}}
                <td>
                    <div class="col p-0 d-flex justify-content-center align-items-center">
                        <a href="/dekan/jadwal/program_studi/semester" class="btn btn-detail-sm-2 me-1">Details</a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Tidak ada data mata kuliah</td>
            </tr>
        @endforelse
    </tbody>
</table>