@extends('Kaprodi.atur jadwal.atur-jadwal')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:100%; width: 100%;" >
    {{-- <main class="container-fluid my-0 p-0">  --}}
        <div class="row g-0" style="height: 100%;"> 
            <div class="col d-flex flex-column justify-content-center align-items-center" style="height: 100%; padding: 2%">
                <div class="sub-columns d-flex justify-content-center align-items-center" style="height: 30%;">
    
                    {{-- <div class="d-flex flex-column flex-md-row justify-content-between align-items-center" style="padding-left: 20%; padding-right: 20%; height: 30%;"> --}}
                        @foreach($angkatans as $angkatan)
                            <div class="flex-column justify-content-center" style="margin-right: 3%; height:   100%;">
                                <div class="row flex-column justify-content-center align-items-start" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #D6CAF1; height: 20%;">
                                    <div class="d-flex justify-content-center align-items-center">
                                        Angkatan {{ $angkatan->angkatan }} 
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center" style="width: 100%; height: auto; background-color: #B5A3C6; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                    <img src="{{ asset('img/task-1.png') }}" style="width: 50%;">
                                    <div class="row d-flex justify-content-center">
                                        <a href="/angkatan/{{ $angkatan-> id }}" class="btn btn-details mb-2">Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                {{-- <div class="sub-columns d-flex flex-column flex-md-row justify-content-between" style="padding-left: 20%; padding-right: 20%; height: 30%;"> --}}
    
                    
                
                <div class="row m-5"> 
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
    {{-- </main> --}}
</div>
@endsection