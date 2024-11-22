<nav class="navbar navbar-light pb-2">
    <div>
        <form class="d-flex justify-content-start">
        <input type="text" class="search-bar form-control" placeholder="Search Here" style="border-radius: 15px; height: 40px; width: 220px; margin-left:145px;">
            <div class="profile-pic">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                </a>
        </form>
    </div>
</nav>
{{-- <p class="text-black column-title" style="width:100%; height: 5%; border-radius: 5px; margin: 0;">Kolom 3</p> --}}
<div class="text-black bg-white pt-3" style="width:100%; height:45%; border-radius: 15px; margin: 0;text-align:center;">
    {{-- @include("partial/sideprofile") --}}
    <img src="img/profile.png" style="width: 27%; display: block; margin: auto;" alt="">
    <span class="badge rounded-pill bg-secondary mt-3">Mahasiswa</span>
    <h5 class="card-title" style="font-weight: bold;">Yesi Dwi Ningtias</h5>
    <p class = "card-description">24060122120027</p>
    <p class = "card-description">yesidwiningtias@gmail.com</p>
    {{-- <p class = "card-description mx-3 my-0">_______________________________________</p> --}}
    <p class = "card-description">Fakultas Sains dan Matematika</p>
    <div class="d-flex justify-content-center">
        {{-- <div class="ms-auto "> --}}
            <a href="{{ route('profile') }}" class="btn btn-details mt-4">Details</a>
        {{-- </div> --}}
    </div>
</div>

