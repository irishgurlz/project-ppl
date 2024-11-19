@extends('Dekan.alokasi.alokasi')

@section('content')
<div class="container" style="margin-top: 50px; margin-left: 5%;">
    <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px;">
        {{ $program_studi->nama_program_studi }}
    </div>
</div>
<div class="d-flex justify-content-end mt-3">
    <button class="btn btn-terima-sm-2" onclick="updateAllStatus(1)" style="width:15%; margin-right: 6%;">Terima Semua</button>
</div>
<div class="container" style="width:90%; margin-top:20px;">
    <table class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Ruang</th>
                <th class="text-center">Kapasitas</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($program_studi->listRuang as $key => $item)
                <tr>
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td class="text-center">{{ $item->nama_ruang }}</td>
                    <td class="text-center">{{ $item->kapasitas }}</td>
                    <td class="text-center">
                        <span id="status-{{ $item->id }}" class="badge rounded-pill {{ $item->status == 1 ? 'bg-success' : ($item->status == 2 ? 'bg-danger' : 'bg-warning') }}">
                            {{ $item->status == 1 ? 'Diterima' : ($item->status == 2 ? 'Ditolak' : 'Menunggu') }}
                        </span>
                    </td>
                    <td>
                        <div class="row d-flex justify-content-start g-0">
                            <div class="col p-0 d-flex align-items-center">
                                <button class="btn btn-terima-sm-2 me-1" onclick="updateStatus({{ $item->id }}, 1)">Terima</button>
                                <button class="btn btn-tolak-sm-2 me-1" onclick="updateStatus({{ $item->id }}, 2)">Tolak</button>
                                <button class="btn btn-refresh-sm-2" onclick="updateStatus({{ $item->id }}, 0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                                      </svg>
                                </button>

                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data ruang</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
    function updateStatus(ruangId, status) {
        let id_program_studi = {{ $program_studi->id }};
        $.ajax({
            url: `/dekan/ruang/program_studi/${id_program_studi}`,
            type: 'POST',
            data: {
                status: status,
                id: ruangId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // console.error("emi"); 
                $('#status-' + ruangId).removeClass('bg-warning bg-success bg-danger'); 
                if (status === 1) {
                    $('#status-' + ruangId).addClass('bg-success').text('Diterima');
                } else if (status === 2) {
                    $('#status-' + ruangId).addClass('bg-danger').text('Ditolak'); 
                } else if (status === 0) {
                    $('#status-' + ruangId).addClass('bg-warning').text('Menunggu'); 
                }
            },
            error: function(xhr) {
                console.error(xhr); 
                console.log(xhr.responseText); 
                alert('Gagal memperbarui status. Silakan coba lagi.');
            }
        });
    }

    function updateAllStatus(status){
    let id_program_studi = {{ $program_studi->id }};
    let ruangIds = @json($program_studi->listRuang->pluck('id'));

    $.ajax({
        url: `/dekan/ruang/program_studi/${id_program_studi}/updateAll`,
        type: 'POST',
        data: {
            status: status,
            ruangIds: ruangIds,  // Send as an array
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            ruangIds.forEach(ruangId => {
                $('#status-' + ruangId).removeClass('bg-warning bg-success bg-danger'); 
                $('#status-' + ruangId).addClass('bg-success').text('Diterima');
            });
        },
        error: function(xhr) {
            alert('Gagal memperbarui status. Silakan coba lagi.');
        }
    });
}

</script>

@endsection
