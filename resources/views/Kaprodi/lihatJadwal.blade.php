<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailsaturJadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="overflow:hidden">
<main class="container-fluid my-0 p-0"> 
    <div class="row g-0">
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2 d-none d-md-block">
            @include("Kaprodi.partial.Sidebar");
        </div>
        <!-- Kolom 2 -->
        <div class="col col-sm-9 col-md-8 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3" style="">
            <div class="text-black column-title d-flex justify-content-start" style="width:100%; height: 5%; font-weight: bold; border-radius: 5px; margin: 0;">
                <p class="d-flex align-items-end m-2">Tampilan Jadwal </p>
            </div>
            <div class="d-flex justify-content-center align-items-start bg-white pt-5" style="width:100%; height: 100%; border-radius: 15px; position: relative;">
                {{-- <div style="height: 90%"> --}}
                    <div class="" style="width:95%; height: 65%; overflow-y:auto">
                        @include("Kaprodi/timeTable-Jadwal");
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</main>

<script>
    function getMataKuliahSemester() {
        $('#jenis_semester_select').on('change', function(event){
            event.preventDefault();
            let jenis_semester = $(this).val();
            console.log(jenis_semester);

            let url = '{{route("kaprodi.aturJadwal.semester")}}';
            console.log(url);

            $.ajax({
                url: url,
                type: 'GET',
                cache: false,
                data: {
                    jenis_semester: jenis_semester,
                },
                success: function(response) {
                    let container = $('#data_table');
                    console.log(response.data);

                    container.empty();
                    container.html(response.data);
                },
                error: function(error) {
                    console.log(error);
                }
            })
        })
    }

    $(document).ready(function(){
        getMataKuliahSemester();
    });
</script>

</body>
</html>





                        
                        
                        