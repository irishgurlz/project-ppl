<!-- Modal -->
<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content" style="background-color: #775E90; border-radius: 15px; width: 60%;">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Gedung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-add-gedung" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_gedung" class="form-label text-white">Nama Gedung</label>
                        <input type="text" class="form-control" id="nama_gedung" name="nama_gedung" style="border: none;">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama_gedung"></div>
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
$('#store').click(function(e) {
    e.preventDefault();

    // Ambil data input dari form modal
    let nama_gedung = $('#nama_gedung').val();
    let token = $("meta[name='csrf-token']").attr("content");

    // Lakukan AJAX POST untuk menyimpan data
    $.ajax({
        url: `/akademik/gedung`,
        type: "POST",
        data: {
            "nama_gedung": nama_gedung,
            "_token": token
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: response.message,
                timer: 3000
            });
            // Jika sukses, tambahkan baris baru ke tabel tanpa refresh

            let newRow = `<div class="option d-flex justify-content-between align-items-center mt-2">
                            <div class="text-white ms-3">Gedung ${response.data.nama_gedung}</div>
                            <div class="d-flex justify-content-end">
                                <form action="/akademik/gedung/${response.data.id}" method="POST" class="d-flex align-items-center">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/akademik/gedung/${response.data.id}" class="btn btn-detail-sm-1 me-1">Details</a>
                                    <input type="submit" value="Delete" class="btn btn-delete-sm-1 me-2">
                                </form>
                            </div>                        
                        </div>`;

    
            $('.data').append(newRow);   // Tambahkan baris baru ke tabel

            // Kosongkan form modal setelah disimpan
            $('#nama_gedung').val('');
                        
            // Tutup modal
            $('#modal-add').modal('hide');
            setTimeout(function() {
                // Clean up potential overlay issues
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }, 2000);

        },
        error: function(error) {
            $('#alert-nama_gedung').toggleClass('d-none d-block').html(error.responseJSON.nama_gedung);
            
            $('#modal-add').on('hidden.bs.modal', function (e) {
                // Reset form input
                $('#nama_gedung').val('');
                
                // Sembunyikan pesan error
                $('#alert-nama_gedung').addClass('d-none').removeClass('d-block').html('');
            });
        }

    });
});


</script>
