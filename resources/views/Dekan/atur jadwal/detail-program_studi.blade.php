@extends('Dekan.atur jadwal.atur-jadwal')
@section('content')
<div class="container" style="margin-top: 50px; margin-left: 5%; margin-bottom: 30px;">
    <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px;">
        {{-- {{ $program_studi->nama_program_studi }} --}}
        Informatika
    </div>
    <div class="d-flex justify-content-between align-items-end" style="width: 90%;">
        <div class="">
            <div class="d-flex justify-content-start mt-2">Jenis Semester</div>
            <select id="jenis_semester_select" class="input-form d-flex justify-content-start mt-2">
                <option  disabled selected>--Pilih Jenis Semester--</option>
                <option value="ganjil" >Ganjil</option>
                <option value="genap" >Genap</option>
            </select>
        </div>
        <button class="btn btn-terima-sm-2" onclick="updateAllStatusMk(1)" style="height:60%; width: 25%">Terima Semua</button>
    </div>
</div>


<div class="container" style="width:90%; margin-top:20px;">
    <div id="data_table" style="overflow-y: auto; max-height: 550px;">
        <table class="table table-striped mt-3" style="border-radius: 10px; overflow: hidden;">
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
                @forelse ($program_studi->listMataKuliah as $key => $value)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}</td>
                        <td>{{$value->nama_mata_kuliah}}</td>
                        <td>{{$value->jenis_mata_kuliah}}</td>
                        <td>{{$value->sks}}</td>
                        <td>{{$value->semester}}</td>
                        <td>
                            <span id="status-{{ $value->id }}" class="badge rounded-pill {{ $value->status_jadwal == 1 ? 'bg-success' : ($value->status_jadwal == 2 ? 'bg-danger' : 'bg-warning') }}">
                                {{ $value->status_jadwal == 1 ? 'Diterima' : ($value->status_jadwal == 2 ? 'Ditolak' : 'Menunggu') }} 
                        </td>
                        <td>
                            <select class="input-form" style="width:100%; height: 80%; font-weight: bold;font-size: 12px" onchange="handleSelectChange(this, {{ $value->id }})">
                                {{-- <select class="input-form" onchange="handleSelectChange(this, {{ $value->id }})"> --}}

                                <option disabled selected>Ubah Status</option>
                                <option value="0" style="font-weight: bold; font-size: 12px;">Reset</option>
                                <option value="1" style="font-weight: bold; font-size: 12px;">Terima</option>
                                <option value="2" style="font-weight: bold; font-size: 12px;">Tolak</option>
                            </select>
                        </td>
                        <td>
                            <div class="col p-0 d-flex justify-content-center align-items-center">
                                <a href="/dekan/jadwal/mata_kuliah/{{$value->id}}" class="btn btn-detail-sm-2 me-1">Details</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Tidak ada data mata kuliah</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" id="id_program_studi" value="{{ $program_studi->id }}" />
<script>
    function getMataKuliahSemester() {
        $('#jenis_semester_select').on('change', function(event){
            event.preventDefault();
            let jenis_semester = $(this).val();
            let id_program_studi = $('#id_program_studi').val(); 

            console.log('Jenis Semester:', jenis_semester);
            console.log('Program Studi ID:', id_program_studi);

            let url = '{{route("dekan.aturJadwal.semester", ":id")}}'.replace(':id', id_program_studi);
            console.log('Request URL:', url);

            $.ajax({
                url: url,
                type: 'GET',
                cache: false,
                data: {
                    jenis_semester: jenis_semester,
                    id_program_studi: id_program_studi 
                },
                success: function(response) {
                    console.log(response);
                    let container = $('#data_table');
                    container.empty();
                    container.html(response.data);
                },
                error: function(xhr, error) {
                    console.log(error);
                    console.log('XHR:', xhr.responseText);
                }
            });
        });
    }

    $(document).ready(function(){
        getMataKuliahSemester();
    });


    function handleSelectChange(selectElement, MataKuliahId) {
    const selectedValue = parseInt(selectElement.value, 10); 
    updateStatusMk(MataKuliahId, selectedValue); // Menggunakan MataKuliahId
}

function updateStatusMk(MataKuliahId, status) {
    let id_program_studi = {{ $program_studi->id }};
    $.ajax({
        url: `/dekan/jadwal/${id_program_studi}`,
        type: 'POST',
        data: {
            status_jadwal: status, // Menggunakan parameter 'status'
            id: MataKuliahId, // Konsisten menggunakan 'MataKuliahId'
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            $('#status-' + MataKuliahId).removeClass('bg-warning bg-success bg-danger');
            if (status === 1) { // Konsisten menggunakan 'status'
                $('#status-' + MataKuliahId).addClass('bg-success').text('Diterima');
            } else if (status === 2) {
                $('#status-' + MataKuliahId).addClass('bg-danger').text('Ditolak');
            } else if (status === 0) {
                $('#status-' + MataKuliahId).addClass('bg-warning').text('Menunggu');
            }
        },
        error: function(xhr) {
            console.error(xhr);
            alert('Gagal memperbarui status. Silakan coba lagi.');
        }
    });
}

function updateAllStatusMk(status) {
    let id_program_studi = {{ $program_studi->id }};
    let MataKuliahs = @json($program_studi->listMataKuliah->pluck('id')); // Mendapatkan ID mata kuliah
    console.log(MataKuliahs);

    $.ajax({
        url: `/dekan/jadwal/${id_program_studi}/updateAll`,
        type: 'POST',
        data: {
            status_jadwal: status,
            MataKuliahIds: MataKuliahs, // Gunakan variabel MataKuliahs di sini
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            MataKuliahs.forEach(MataKuliahId => { // Loop melalui MataKuliahs
                $('#status-' + MataKuliahId).removeClass('bg-warning bg-success bg-danger');
                $('#status-' + MataKuliahId).addClass('bg-success').text('Diterima');
            });
        },
        error: function(xhr) {
            console.error(xhr);
            console.log(xhr.responseText);
            alert('Gagal memperbarui status. Silakan coba lagi.');
        }
    });
}



</script>

    
</script>

@endsection