<div class="bg-white p-3" style="height:100%; width:100%; border-radius:15px;">
    <div class="logo-text">
        <div>
            <img src="{{ asset('img/logo.png') }}" class="logo mb-3 mt-3 me-2 ms-2" alt="Logo">FOCUS
        </div>
    </div>
    <div>
        <a href="/dekan/dashboard" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('dekan/dashboard') ? 'active' : '' }}">
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
        <a href="/dekan/ruang" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('dekan/ruang') || Request::is('dekan/ruang/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/room.png') }}" class="side-logo me-3" alt="Alokasi Ruangan" loading="lazy">Alokasi Ruangan
                </div>
            </div>
        </a>
        <a href="/dekan/jadwal" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('dekan/jadwal') || Request::is('dekan/jadwal/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/prodi.png') }}" class="side-logo me-3" alt="Atur Jadwal Kuliah" loading="lazy">Atur Jadwal Kuliah
                </div>
            </div>
        </a>
        <a  href="{{ route('auth.logout') }}" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('/') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/logout.png') }}" class="side-logo me-3">Log Out
                </div>
            </div>
        </a>
    </div>
</div>
