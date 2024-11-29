<!-- Modal -->
<div class="modal fade" id="modal-ruang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content" style="background-color: #775E90; border-radius: 15px; width: 60%;">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Ruang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-add-ruang" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3" style="display: none;">
                        <input type="hidden" name="id_gedung" id="id_gedung" value="{{ $gedung->id }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_ruang" class="form-label text-white">Nama Ruang</label>
                        <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama_ruang"></div>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label text-white">Kapasitas</label>
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kapasitas"></div>
                    </div>

                    <div class="mb-3">
                        <label for="id_program_studi" class="form-label text-white">Program Studi</label>
                        <select name="id_program_studi" id="id_program_studi" class="input-form">
                            <option value="" disabled selected>--Pilih Program Studi--</option>
                            @forelse ($program_studi as $item)
                                <option value="{{$item->id}}">{{$item->nama_program_studi}}</option>
                            @empty
                                <option value="">Tidak Ada Program Studi</option>
                            @endforelse
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-id_program_studi"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-add" style="width:25%;" id="store">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JQuery & Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

$('#form-add-ruang').on('submit', function(e) {
    e.preventDefault();
    
    let id_gedung = $('#id_gedung').val();
    let nama_ruang = $('#nama_ruang').val();
    let kapasitas = $('#kapasitas').val();
    let id_program_studi = $('#id_program_studi').val();
    let token = $("meta[name='csrf-token']").attr("content");

    $.ajax({
        url: `/akademik/gedung/${id_gedung}`,
        type: "POST",
        data: {
            "id_gedung": id_gedung,
            "nama_ruang": nama_ruang,
            "kapasitas": kapasitas,
            "id_program_studi": id_program_studi,
            "_token": token
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: response.message,
                timer: 3000
            });
            // Jika sukses, tambahkan baris baru ke tabel tanpa refresh
            let rowCount = $('#data-table tbody tr').length + 1; // Menghitung jumlah baris + 1

            let newRow = `<tr>
                            <td>${rowCount}</td> 
                            <td>${response.data.nama_ruang}</td>
                            <td>${response.data.kapasitas}</td>
                            <td>
                                <span class="badge rounded-pill bg-secondary"> ${response.data.nama_program_studi}</span></td>
                            <td>
                                <span class="badge rounded-pill bg-warning">Menunggu</span>
                            </td>
                            <td>
                               <div class="row d-flex justify-content-start g-0">
                                  <div class="col p-0 d-flex align-items-center">
                                     <a href="/akademik/program_studi/${response.data.id}/edit">
                                        <img src="{{ asset('img/edit.png') }}" style="width: 24px; height: 24px;">
                                     </a>
                                     <form action="/akademik/program_studi/${response.data.id}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none;">
                                           <img src="{{ asset('img/trash.png') }}" style="width: 24px; height: 24px;">
                                        </button>
                                     </form>
                                  </div>
                               </div>
                            </td>
                          </tr>`;
            $('#data-table tbody').append(newRow);  // Tambahkan baris baru ke tabel

            // Kosongkan form modal setelah disimpan
            $('#id_gedung').val('');
            $('#nama_ruang').val('');
            $('#kapasitas').val('');
            $('#id_program_studi').val('');
                        
            // Tutup modal
            $('#modal-ruang').modal('hide');
            setTimeout(function() {
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }, 2000);
            
        },
        error: function(error) {
            console.log(error);
            $('#alert-id_gedung').toggleClass('d-none d-block').html(error.responseJSON.id_gedung);
            $('#alert-nama_ruang').toggleClass('d-none d-block').html(error.responseJSON.nama_ruang);
            $('#alert-kapasitas').toggleClass('d-none d-block').html(error.responseJSON.kapasitas);
            $('#alert-id_program_studi').toggleClass('d-none d-block').html(error.responseJSON.id_program_studi);
            
            $('#modal-ruang').on('hidden.bs.modal', function (e) {
                // Reset form input
                $('#id_gedung').val('');
                $('#nama_ruang').val('');
                $('#kapasitas').val('');
                $('#id_program_studi').val('');
                        
                // Sembunyikan pesan error
                $('#alert-id_gedung').addClass('d-none').removeClass('d-block').html('');
                $('#alert-nama_ruang').addClass('d-none').removeClass('d-block').html('');
                $('#alert-kapasitas').addClass('d-none').removeClass('d-block').html('');
                $('#alert-id_program_studi').addClass('d-none').removeClass('d-block').html('');
            });
        }

    });
});


</script>
