{{-- <div style="height:100%;  border-radius:15px; position: fixed"> --}}
    <div class="bg-white p-3" style="height:100%; width:16%; border-radius:15px; position: fixed" >
        <div class="logo-text">
            <div>
                <img src="{{ asset('img/logo.png')}}" class="logo mb-3 mt-3 me-2 ms-2" alt="Logo">FOCUS
            </div>
        </div>
        <div>
            <!-- Link menuju Dashboard -->
            <a href="/kaprodi/dashboard" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/dashboard.png')}}"class="side-logo me-3" alt="Dashboard Icon">Dashboard
                </div>
            </a>
            <!-- Link menuju Profile -->
            <a href="/kaprodi/profile" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/users.png')}}" class="side-logo me-3" alt="Profile Icon">Profile
                </div>
            </a>
            <!-- Link menuju Verifikasi IRS -->
            <a href="/kaprodi/verifikasiIRS" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/room.png')}}" class="side-logo me-3" alt="Verifikasi IRS Icon">Verifikasi IRS
                </div>
            </a>
            <!-- Link menuju Atur Jadwal -->
            <a href="/kaprodi/aturJadwal" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/prodi.png')}}" class="side-logo me-3" alt="Atur Jadwal Icon">Atur Jadwal
                </div>
            </a>
            <!-- Link menuju Input Mata Kuliah -->
            <a href="/kaprodi/mata_kuliah" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/prodi.png')}}" class="side-logo me-3" alt="Input Mata Kuliah Icon">Input Mata Kuliah
                </div>
            </a>
            <!-- Link untuk Logout -->
            <a href="/logout" class="nav-link">
                <div class="sideOp d-flex align-items-center">
                    <img src="{{ asset('img/logout.png')}}" class="side-logo me-3" alt="Logout Icon">Log Out
                </div>
            </a>
        </div>
    </div>    
{{-- </div> --}}
