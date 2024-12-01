<div class="bg-white p-3" style="height:86%; width:100%; border-radius:15px;">
                <div class = "logo-text">
                    <div>
                        <img src="{{asset('img/logo.png')}}" class="logo mb-3 mt-3 me-2 ms-2" alt="...">FOCUS
                    </div>
                </div>
                <div>
                    <a  href="{{asset(path: 'pembimbing/dashboard')}}" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{ asset('img/dashboard.png') }}" class="side-logo me-3">Dashboard
                            </div>
                        </div>
                    </a>
                    <a  href="{{asset(path: '/profile')}}" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{asset('img/users.png')}}" class="side-logo me-3">Profile
                            </div>
                        </div>
                    </a>
                    <a  href="/pembimbing/perwalian" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{asset('img/room.png')}}" class="side-logo me-3">Perwalian
                            </div>
                        </div>
                    </a>
                    <a href="{{asset('academics')}}" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{asset('img/room.png')}}" class="side-logo me-3">Academics
                            </div>
                        </div>
                    </a>
                    {{-- <a  href="/" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{asset('img/room.png')}}" class="side-logo me-3">Schedule
                            </div>
                        </div>
                    </a> --}}
                    <a  href="{{ route('auth.logout') }}" class="nav-link">
                        <div type="button" class="sideOp">
                            <div>
                                <img src="{{asset('img/logout.png')}}" class="side-logo me-3">Log Out
                            </div>
                        </div>
                    </a>
                    </div>
            </div>

