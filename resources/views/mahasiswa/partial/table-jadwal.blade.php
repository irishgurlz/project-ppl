<table id="data-table" class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
    <thead> 
        <tr class="text-center">
            <th>No</th>
            <th>Nama Mata Kuliah</th>
            <th>Jenis</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Status</th>
            <th>Aksi</th>
            <th>Lihat Jadwal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jadwal as $key => $value)
    <tr class="text-center">
        <td>{{ $key + 1 }}</td>
        <td>{{ $value->kodemk }}</td>
        <td>{{ $value->hari }}</td> 
        <td>{{ $value->sks }}</td> 
        <td>{{ $value->semester }}</td> 
        <td>1</td> 
        <td>
            1
        </td>
        <td>
            <div class="col p-0 d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-detail-sm-2 me-1">Details</a>
            </div>
        </td>
    </tr>
@endforeach

    </tbody>
</table>