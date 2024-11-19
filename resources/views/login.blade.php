@extends('layouts.app')

@section('content')
    <div class="card d-flex justify-content-center align-items-center mx-auto" style="border-radius: 15px; height: auto; width: 30rem; margin-top: 16rem; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
            <img src="img/logo.png" class="login-logo p-2" style="width:100px;" alt="...">
            <div class="mt-3 text-center" style="font-weight: bold; font-size: 25px;">FOCUS</div>
            <div class="text-center">Faculty and Organizational</div>
            <div class="text-center">Communication Unified System</div>

            <div class="text-center mt-3" style="color: grey">____________________Login____________________</div>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <input id="email" type="email" class="input-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <input id="password" type="password" class="input-form form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-2 mb-3">
                    <label for="remember" style="color:grey; font-size: 15px;">
                        <input type="radio" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                    <a style="text-decoration: none; color:grey; font-size: 14px; font-weight:bold" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-login">Login Now</button>
                </div>
                <br>
            </form>

    </div>
@endsection
