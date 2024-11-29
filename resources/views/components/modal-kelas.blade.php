<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content" style="background-color: #775E90; border-radius: 15px; width: 60%;">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-add-prodi" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="kodemk" class="form-label text-white" style="width: 100%;">Kode Mata Kuliah</label>
                        <select name="kodemk" id="kodemk" class="input-form" style="width: 100%;">
                            <option value="" disabled selected>--Pilih Kode Mata Kuliah--</option>
                            @forelse ($kelas_matkul as $item)
                                <option value="{{$item->kodemk}}">{{$item->kodemk}}</option>
                            @empty
                                <option value="">Tidak Ada Kodemk</option>
                            @endforelse
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kodemk"></div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label text-white">Kelas</label>
                        <input type="text" class="form-control" id="" name="kelas" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kelas"></div>
                    </div>

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
$('#addKelas').click(function(e) {
    e.preventDefault();

    // Ambil data input dari form modal
    let kodemk = $('#kodemk').val();
    let kelas = $('#kelas').val();
    let kapasitas = $('#kapasitas').val();

    // Lakukan AJAX POST untuk menyimpan data
    $.ajax({
        url: `{{route("kaprodi.aturJadwal.kelas")}}`,
        type: "POST",
        data: {
            "kodemk": kodemk,
            "kelas": kelas,
            "kapasitas": kapasitas,
            "_token": token
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: response.message,
                timer: 3000
            });

            let newRow = `<p id="kelas" class="m-0 py-2">${response.data.kelas}</p>`
            $('#kelas p').append(newRow);  // Tambahkan baris baru ke tabel

            // Kosongkan form modal setelah disimpan
            $('#kodemk').val('');
            // $('#total_mahasiswa').val('');
            $('#kelas').val('');
            $('#kapasitas').val('');
                        
            // Tutup modal
            $('#modal-kelas').modal('hide');
            setTimeout(function() {
                // Clean up potential overlay issues
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }, 2000);

        },
        error: function(error) {
            $('#alert-kodemk').toggleClass('d-none d-block').html(error.responseJSON.kodemk);
            $('#alert-kelas').toggleClass('d-none d-block').html(error.responseJSON.kelas);
            $('#alert-kapasitas').toggleClass('d-none d-block').html(error.responseJSON.kapasitas);
            
            $('#modal-kelas').on('hidden.bs.modal', function (e) {
                // Reset form input
                $('#kodemk').val('');
                $('#kelas').val('');
                $('#kapasitas').val('');
                
                // Sembunyikan pesan error
                $('#alert-kodemk').addClass('d-none').removeClass('d-block').html('');
                $('#alert-kelas').addClass('d-none').removeClass('d-block').html('');
                $('#alert-kapasitas').addClass('d-none').removeClass('d-block').html('');
            });
        }

    });
});


</script>
