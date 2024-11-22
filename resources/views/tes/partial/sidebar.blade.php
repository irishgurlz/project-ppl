<div class="bg-white p-3" style="height:100%; width:100%; border-radius:15px;">
    <div class="logo-text">
        <div>
            <img src="{{ asset('img/logo.png') }}" class="logo mb-3 mt-3 me-2 ms-2" alt="Logo">FOCUS
        </div>
    </div>
    <div>
        <a href="/kaprodi/dashboard" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('kaprodi/dashboard') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/dashboard.png') }}" class="side-logo me-3" alt="Dashboard" loading="lazy">Dashboard
                </div>
            </div>
        </a>
        <a href="" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('profile') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/users.png') }}" class="side-logo me-3" alt="Profile" loading="lazy">Profile
                </div>
            </div>
        </a>
        <a href="/kaprodi/ruang" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('kaprodi/ruang') || Request::is('kaprodi/ruang/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/room.png') }}" class="side-logo me-3" alt="Alokasi Ruangan" loading="lazy">Alokasi Ruangan
                </div>
            </div>
        </a>
        <a href="/kaprodi/jadwal" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('kaprodi/jadwal') || Request::is('kaprodi/jadwal/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/prodi.png') }}" class="side-logo me-3" alt="Atur Jadwal Kuliah" loading="lazy">Atur Jadwal Kuliah
                </div>
            </div>
        </a>

        @guest
        <a class="nav-link" href="/login">
            <div type="button" class="sideOp">
                <div>
                    <img src="{{ asset('img/logout.png') }}" class="side-logo me-3" alt="Log In" loading="lazy">Log In
                </div>
            </div>
        </a>
        @endguest
        @auth
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <div type="button" class="sideOp">
                <div>
                    <img src="{{ asset('img/logout.png') }}" class="side-logo me-3" alt="Log Out" loading="lazy">Log Out
                </div>
            </div>
        </a>
        @endauth

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
