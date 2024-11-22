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

<div class="container d-flex justify-content-start align-items-center" style="margin-left:7.5%; margin-bottom: 10px; width: 88%;">
    <div class="col p-0 d-flex align-items-center">
        {{-- <button class="btn btn-kelas d-flex justify-content-center align-items-center p-1" style="border-radius: 10px; margin-left:1%;">KELAS A</button>
        <button class="btn btn-kelas d-flex justify-content-center align-items-center p-1" style="border-radius: 10px; margin-left:1%;">KELAS B</button>
        <button class="btn btn-kelas d-flex justify-content-center align-items-center p-1" style="border-radius: 10px; margin-left:1%;">KELAS C</button>
        <button class="btn btn-kelas d-flex justify-content-center align-items-center p-1" style="border-radius: 10px; margin-left:1%;">KELAS D</button> --}}
        <select class="input-form">
            <option value="" disabled selected>--Pilih Kelas--</option>
            <option value="" >Kelas A</option>
            <option value="" >Kelas B</option>
            <option value="" >Kelas C</option>
        </select>
    </div>
</div>

<div class="sub-columns d-flex flex-column flex-md-row justify-content-between" style="padding-left: 5%; height: 30%;">

    <div class="flex-column justify-content-center align-items-start" style="margin-right: 3%; height: 100%; width: 100%;" >
        <div class="row flex-column justify-content-center align-items-start" style="border-top-left-radius: 15px; border-top-right-radius: 15px; background-color: #D6CAF1; height: 20%;">
            <div class="d-flex justify-content-center align-items-center" >
                KELAS A
            </div>
        </div> 
        <div class="row d-flex justify-content-between row-overflow" style=" width: 100%; background-color: #B5A3C6; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            
            <div class="d-flex align-items-start" style="margin: 2%;">
                <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 10px; text-align: center;">
                    MON
                </div>
                <div class="d-flex flex-column mx-3" style="width: 100%;">
                    <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Matematika I</strong><br>
                        07:00 - 09:40<br>
                        E101
                    </div>
                    <div class="course-item" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Dasar Pemrograman</strong><br>
                        15:30 - 18:00<br>
                        E101
                    </div>
                </div>
            </div>
            
            <div class="d-flex align-items-start" style="margin: 2%;">
                <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 15px; text-align: center;">
                    TUE
                </div>
                <div class="d-flex flex-column mx-3" style="width: 100%;">
                    <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Matematika I</strong><br>
                        07:00 - 09:40<br>
                        E101
                    </div>
                    <div class="course-item" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Dasar Pemrograman</strong><br>
                        15:30 - 18:00<br>
                        E101
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-start" style="margin: 2%;">
                <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 10px; text-align: center;">
                    WED
                </div>
                <div class="d-flex flex-column mx-3" style="width: 100%;">
                    <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Matematika I</strong><br>
                        07:00 - 09:40<br>
                        E101
                    </div>
                    <div class="course-item" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Dasar Pemrograman</strong><br>
                        15:30 - 18:00<br>
                        E101
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-start" style="margin: 2%;">
                <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 12px; text-align: center;">
                    THU
                </div>
                <div class="d-flex flex-column mx-3" style="width: 100%;">
                    <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Matematika I</strong><br>
                        07:00 - 09:40<br>
                        E101
                    </div>
                    <div class="course-item" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Dasar Pemrograman</strong><br>
                        15:30 - 18:00<br>
                        E101
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-start" style="margin: 2%;">
                <div class="text-white" style="background-color: #775E90; border-radius: 50%; padding: 15px 16px; text-align: center;">
                    FRI
                </div>
                <div class="d-flex flex-column mx-3" style="width: 100%;">
                    <div class="course-item mb-2" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Matematika I</strong><br>
                        07:00 - 09:40<br>
                        E101
                    </div>
                    <div class="course-item" style="background-color: #F1DEDD; border-radius: 10px; padding: 10px;">
                        <strong>Dasar Pemrograman</strong><br>
                        15:30 - 18:00<br>
                        E101
                    </div>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-start mt-2">
            <div class="col p-0 d-flex align-items-center">
                <button class="btn btn-terima-sm-2 me-1">Terima</button>
                <button class="btn btn-tolak-sm-2 me-1">Tolak</button>
                <button class="btn btn-refresh-sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                      </svg>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection