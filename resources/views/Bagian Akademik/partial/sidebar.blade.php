<div class="bg-white p-3 " style="height:100%; width:100%; border-radius:15px;">
    <div class = "logo-text">
        <div>
            <img src="{{ asset('img/logo.png') }}" class="logo mb-3 mt-3 me-2 ms-2" alt="...">FOCUS
        </div>
    </div>
    <div>
        <a  href="/akademik/dashboard" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('akademik/dashboard') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/dashboard.png') }}" class="side-logo me-3">Dashboard
                </div>
            </div>
        </a>
        <a  href="/profile" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('profile') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/users.png') }}" class="side-logo me-3">Profile
                </div>
            </div>
        </a>
        <a  href="/akademik/ruang" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('akademik/ruang')|| Request::is('akademik/gedung/*') || Request::is('akademik/ruang/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/room.png') }}" class="side-logo me-3">Alokasi Ruangan
                </div>
            </div>
        </a>
        <a  href="/akademik/program_studi" class="nav-link">
            <div type="button" class="sideOp {{ (Request::is('akademik/program_studi') || Request::is('akademik/program_studi/*')) ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/prodi.png') }}" class="side-logo me-3">Input Program Studi
                </div>
            </div>
        </a>
        <a  href="/" class="nav-link">
            <div type="button" class="sideOp {{ Request::is('/') ? 'active' : '' }}">
                <div>
                    <img src="{{ asset('img/logout.png') }}" class="side-logo me-3">Log Out
                </div>
            </div>
        </a>
        </div>
</div>
