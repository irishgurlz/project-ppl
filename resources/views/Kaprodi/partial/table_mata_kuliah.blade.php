
<table class="table table-striped table-bordered text-center" style="border-radius:10px">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mata kuliah</th>
            <th>Jenis</th>
            <th>SKS</th>
            <th>Semester</th>
            {{-- <th>Status</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($mata_kuliah as $key => $value)
        <tr class= "text-center">
            <td> {{$key + 1}}</td>
            <td> {{$value -> nama_mata_kuliah}}</td>
            <td> {{$value -> jenis_mata_kuliah}}</td>
            <td> {{$value -> sks}}</td>
            <td> {{$value -> semester}}</td>
            {{-- <td>
                <span class="badge rounded-pill {{ $value->status == 1 ? 'bg-success' : ($value->status == 2 ? 'bg-danger' : 'bg-warning') }}">
                    {{ $value->status == 1 ? 'Diterima' : ($value->status == 2 ? 'Ditolak' : 'Menunggu') }} 
            </td> --}}
            <td><a href="/kaprodi/detailsaturJadwal" class="btn btn-sm btn-details">Details</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="7"> Tidak ada data </td>
        </tr>
        @endforelse
    </tbody>
</table>
