@extends('Dekan.atur jadwal.atur-jadwal')
@section('content')
<div class="container" style="margin-top: 50px; margin-left: 5%; margin-bottom: 50px;">
    <div class="badge-label d-flex justify-content-center align-items-center p-1" style="border-radius: 10px;">
        {{-- {{ $program_studi->nama_program_studi }} --}}
        Informatika
    </div>
</div>
<main class="container-fluid my-0 p-0 "> 
    <div class="row g-0"> 
        <div class="col d-flex flex-column justify-content-start">
            <div class="sub-columns d-flex flex-column flex-md-row justify-content-between align-items-center" style="padding-left: 20%; padding-right: 20%; height: 30%;">

                <div class="flex-column justify-content-center" style="margin-right: 3%; height: 100%;" >
                    <div class="row flex-column justify-content-center align-items-start" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #D6CAF1; height: 20%;">
                        <div class="d-flex justify-content-center align-items-center" >
                            SEMESTER 1
                        </div>
                    </div>     
                    <div class="row d-flex justify-content-center" style="width: 100%; height: auto; background-color: #B5A3C6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; ">
                        <img src="{{ asset('img/task-1.png') }}" style="width: 50%;">
                        <div class="row d-flex justify-content-center">
                            <a href="/dekan/jadwal/program_studi/semester" class="btn btn-details mb-2">Details</a>
                        </div>
                    </div>
                </div>

                <div class="flex-column justify-content-center" style="margin-right: 3%; height: 100%;" >
                    <div class="row" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #D6CAF1; height: 20%;">
                        <div class="d-flex justify-content-center align-items-center" >
                            SEMESTER 3
                        </div>
                    </div>     
                    <div class="row d-flex justify-content-center" style="width: 100%; height: auto; background-color: #B5A3C6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; ">
                        {{-- <div class="col text-center bg-info"> --}}
                            <img src="{{ asset('img/task-1.png') }}" style="width: 50%; ">
                            <div class="row d-flex justify-content-center">
                                <a href="/program_studi" class="btn btn-details mb-2">Details</a>
                            </div>
                    </div>
                </div>
                
            </div>

            <div class="sub-columns d-flex flex-column flex-md-row justify-content-between" style="padding-left: 20%; padding-right: 20%; height: 30%;">

                <div class="flex-column justify-content-center align-items-start" style="margin-right: 3%; height: 100%;" >
                    <div class="row flex-column justify-content-center align-items-start" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #D6CAF1; height: 20%;">
                        <div class="d-flex justify-content-center align-items-center" >
                            SEMESTER 5
                        </div>
                    </div>     
                    <div class="row d-flex justify-content-center" style="width: 100%; height: auto; background-color: #B5A3C6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; ">
                        <img src="{{ asset('img/task-1.png') }}" style="width: 50%;">
                        <div class="row d-flex justify-content-center">
                            <a href="/program_studi" class="btn btn-details mb-2">Details</a>
                        </div>
                    </div>
                </div>

                <div class="flex-column justify-content-center align-items-start" style="margin-right: 3%; height: 100%;" >
                    <div class="row" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #D6CAF1; height: 20%;">
                        <div class="d-flex justify-content-center align-items-center" >
                            SEMESTER 7
                        </div>
                    </div>     
                    <div class="row d-flex justify-content-center" style="width: 100%; height: auto; background-color: #B5A3C6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; ">
                        {{-- <div class="col text-center bg-info"> --}}
                            <img src="{{ asset('img/task-1.png') }}" style="width: 50%; ">
                            <div class="row d-flex justify-content-center">
                                <a href="/program_studi" class="btn btn-details mb-2">Details</a>
                            </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row"> 
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>
@endsection