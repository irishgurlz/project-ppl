<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content" style="background-color: #775E90; border-radius: 15px; width: 60%;">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Program Studi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-add-prodi" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_program_studi" class="form-label text-white">Nama Program Studi</label>
                        <input type="text" class="form-control" id="nama_program_studi" name="nama_program_studi" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama_program_studi"></div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="total_mahasiswa" class="form-label text-white">Total Mahasiswa</label>
                        <input type="text" class="form-control" id="total_mahasiswa" name="total_mahasiswa" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-total-mahasiswa"></div>
                    </div> --}}
                    <div class="mb-3">
                        <label for="id_ketua_program_studi" class="form-label text-white" style="width: 100%;">Ketua Program Studi</label>
                        <select name="id_ketua_program_studi" id="id_ketua_program_studi" class="input-form" style="width: 100%;">
                            <option value="" disabled selected>--Pilih Ketua Program Studi--</option>
                            @forelse ($ketua_program_studi as $item)
                                <option value="{{$item->id}}">{{$item->dosen->nama_dosen}}</option>
                            @empty
                                <option value="">Tidak Ada Ketua Program Studi</option>
                            @endforelse
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-id_ketua_program_studi"></div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="ketua_program_studi" class="form-label text-white">Ketua Program Studi</label>
                        <input type="text" class="form-control" id="ketua_program_studi" name="ketua_program_studi" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-ketua"></div>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-add" style="width:25%;" id="store">Tambah</button>
            </div>
        </div>
    </div>
</div>


<!-- JQuery & Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$('#store').click(function(e) {
    e.preventDefault();

    // Ambil data input dari form modal
    let nama_program_studi = $('#nama_program_studi').val();
    let total_mahasiswa = $('#total_mahasiswa').val();
    let id_ketua_program_studi = $('#id_ketua_program_studi').val();
    let token = $("meta[name='csrf-token']").attr("content");

    // Lakukan AJAX POST untuk menyimpan data
    $.ajax({
        url: `/akademik/program_studi`,
        type: "POST",
        data: {
            "nama_program_studi": nama_program_studi,
            "id_ketua_program_studi": id_ketua_program_studi,
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
                <td>${rowCount}</td>  <!-- Ini nomor urut yang dihitung -->
                            <td>${response.data.nama_program_studi}</td>
                            <td>
                                <span class="badge rounded-pill bg-secondary"> ${response.data.id_ketua_program_studi}</span></td>
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
            $('#nama_program_studi').val('');
            // $('#total_mahasiswa').val('');
            $('#id_ketua_program_studi').val('');
                        
            // Tutup modal
            $('#modal-create').modal('hide');
            setTimeout(function() {
                // Clean up potential overlay issues
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }, 2000);

        },
        error: function(error) {
            $('#alert-nama_program_studi').toggleClass('d-none d-block').html(error.responseJSON.nama_program_studi);
            $('#alert-total-mahasiswa').toggleClass('d-none d-block').html(error.responseJSON.total_mahasiswa);
            $('#alert-ketua').toggleClass('d-none d-block').html(error.responseJSON.ketua_program_studi);
            
            $('#modal-create').on('hidden.bs.modal', function (e) {
                // Reset form input
                $('#nama_program_studi').val('');
                $('#total_mahasiswa').val('');
                $('#ketua_program_studi').val('');
                
                // Sembunyikan pesan error
                $('#alert-nama_program_studi').addClass('d-none').removeClass('d-block').html('');
                $('#alert-total-mahasiswa').addClass('d-none').removeClass('d-block').html('');
                $('#alert-ketua').addClass('d-none').removeClass('d-block').html('');
            });
        }

    });
});


</script>
