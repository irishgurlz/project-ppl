@extends('Dekan.atur jadwal.atur-jadwal')
@section('content')
<div class="container d-flex justify-content-start align-items-center" style="margin-top: 40px;margin-left:2%; margin-bottom: 10px;">
    <button class="btn" style="background-color: #775E90; border-radius: 100%; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; padding-top: 5px;" >
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="color:white;">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </button>
    <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px; margin-left:1%;">
        Informatika
    </div>
    <div class="badge-label d-flex justify-content-center align-items-center p-1 ms-2" style="border-radius: 10px;">
        Semester 1
    </div>
</div>



<div class="mt-5 sub-columns d-flex flex-column flex-md-row justify-content-between" style="padding-left: 5%; height: 30%;">

    <div class="flex-column justify-content-center align-items-start" style="margin:auto; height: 100%; width: 70%;" >
        <div class="row flex-column justify-content-center align-items-start" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #B5A3C6; height: 20%;">
            <div class="d-flex justify-content-center align-items-center" >
                {{$mata_kuliah->nama_mata_kuliah}}
            </div>
        </div> 
        <div class="row d-flex justify-content-between row-overflow" style="width: 100%; background-color: #A39DBF; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div style="margin-top: 3%; margin-bottom:3%">
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-terima-sm-2" onclick="updateAllStatus(1)" style="width:30%; margin-right:2.5% ">Terima Semua</button>
                </div>
                @forelse ($jadwal as $key => $value)
                    <div class="d-flex align-items-start">
                        <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 22px; text-align: center;">
                            {{$value->kelas_matkul}}
                        </div>
                        <div class="d-flex flex-column mx-3" style="width: 100%;">
                            <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                                <div class="d-flex justify-content-between">
                                    <strong>{{$value->hari}}</strong><br>
                                    <div style="margin-left: 53%">
                                        <span id="status-{{ $value->id }}" class="badge rounded-pill {{ $value->status == 1 ? 'bg-success' : ($value->status == 2 ? 'bg-danger' : 'bg-warning') }}">
                                            {{ $value->status == 1 ? 'Diterima' : ($value->status == 2 ? 'Ditolak' : 'Menunggu') }} 
                                    </div>
                                    <div class="" style="width:25%"> 
                                        <select class="input-form" style="width:100%; height: 80%; font-weight: bold;font-size: 12px" onchange="handleSelectChange(this, {{ $value->id }})">
                                            <option disabled selected>Ubah Status</option>
                                            {{-- @if ($value->status == 0)
                                                <option value="1" style="font-weight: bold; font-size: 12px;">Terima</option>
                                                <option value="2" style="font-weight: bold; font-size: 12px;">Tolak</option>
                                            @elseif ($value->status == 1)
                                                <option value="0" style="font-weight: bold; font-size: 12px;">Reset</option>
                                                <option value="2" style="font-weight: bold; font-size: 12px;">Tolak</option>
                                            @else
                                                <option value="0" style="font-weight: bold; font-size: 12px;">Reset</option>
                                                <option value="1" style="font-weight: bold; font-size: 12px;">Terima</option>
                                            @endif --}}
                                            <option value="0" style="font-weight: bold; font-size: 12px;">Reset</option>
                                            <option value="1" style="font-weight: bold; font-size: 12px;">Terima</option>
                                            <option value="2" style="font-weight: bold; font-size: 12px;">Tolak</option>
                                        </select>
                                    </div>
                                </div>
                                @php
                                        $startTime = strtotime($value->jam_mulai); 
                                        $endTime = strtotime($value->jam_selesai); 

                                        $startTimeFormatted = date('H:i', $startTime);
                                        $endTimeFormatted = date('H:i', $endTime);
                                    @endphp
                                    <p class="m-0" style="line-height: 1.2; margin-bottom: 2px;">{{$startTimeFormatted }} - {{$endTimeFormatted}}</p>
                                {{$value->ruang->nama_ruang}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Belum ada kelas</p>
                @endforelse
            </div>
            
        

        </div>
    </div>

</div>

<script>
    function handleSelectChange(selectElement, jadwalId) {
        const selectedValue = parseInt(selectElement.value, 10); 
        updateStatus(jadwalId, selectedValue);
    }

    function updateStatus(jadwalId, status) {
        let id_mata_kuliah = {{ $mata_kuliah->id }};
        $.ajax({
            url: `/dekan/jadwal/mata_kuliah/${id_mata_kuliah}`,
            type: 'POST',
            data: {
                status: status,
                id: jadwalId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // console.error("emi"); 
                $('#status-' + jadwalId).removeClass('bg-warning bg-success bg-danger'); 
                if (status === 1) {
                    $('#status-' + jadwalId).addClass('bg-success').text('Diterima');
                } else if (status === 2) {
                    $('#status-' + jadwalId).addClass('bg-danger').text('Ditolak'); 
                } else if (status === 0) {
                    $('#status-' + jadwalId).addClass('bg-warning').text('Menunggu'); 
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
    let id_mata_kuliah = {{ $mata_kuliah->id }};
    let jadwalIds = @json($mata_kuliah->listJadwal->pluck('id'));
    console.log(jadwalIds);

    $.ajax({
        url: `/dekan/jadwal/mata_kuliah/${id_mata_kuliah}/updateAll`,
        type: 'POST',
        data: {
            status: status,
            jadwalIds: jadwalIds, 
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            jadwalIds.forEach(jadwalId => {
                $('#status-' + jadwalId).removeClass('bg-warning bg-success bg-danger'); 
                $('#status-' + jadwalId).addClass('bg-success').text('Diterima');
            });
        },
        error: function(xhr) {
            console.error(xhr); 
            console.log(xhr.responseText); 
            // alert('Gagal memperbarui status. Silakan coba lagi.');
        }
    });
    }
</script>
@endsection