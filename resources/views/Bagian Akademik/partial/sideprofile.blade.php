<nav class="navbar navbar-light pb-2">
    <div>
        <form class="d-flex justify-content-start">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  style="border-radius: 10px;" >
        <button class="btn btn-outline-success" type="submit"  style="border-radius: 10px;" >Search</button>
        </form>
    </div>
</nav>
{{-- <p class="text-black column-title" style="width:100%; height: 5%; border-radius: 5px; margin: 0;">Kolom 3</p> --}}
<div class="text-black bg-white pt-3" style="width:100%; height:40%; border-radius: 15px; margin: 0;text-align:center;">
    {{-- @include("partial/sideprofile") --}}
    <img src="{{ asset('img/profile.png') }}" style="width: 27%; display: block; margin: auto;" alt="">
    <span class="badge rounded-pill bg-secondary mt-3">Bagian Akademik</span>
    <h5 class="card-title" style="font-weight: bold;">Aniqah Nursabrina</h5>
    <p class = "card-description">24060122120036</p>
    <p class = "card-description">aniqahnursabrina@gmail.com</p>
    {{-- <p class = "card-description mx-3 my-0">_______________________________________</p> --}}
    <p class = "card-description">Fakultas Sains dan Matematika</p>
    <div class="d-flex justify-content-center">
        {{-- <div class="ms-auto "> --}}
            <a href="/profile" class="btn btn-details mt-4">Details</a>
        {{-- </div> --}}
    </div>
</div>
