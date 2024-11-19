@extends('layouts.app')

@section('content')
    <div class="card d-flex justify-content-center align-items-center mx-auto" style="border-radius: 15px; height: auto; width: 30rem; margin-top: 10rem; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
        <img src="img/logo.png" class="login-logo p-2" style="width:100px;" alt="...">
        <div class="mt-3 text-center" style="font-weight: bold; font-size: 25px;">FOCUS</div>
        <div class="text-center">Faculty and Organizational</div>
        <div class="text-center">Communication Unified System</div>

        <div class="text-center mt-3" style="color: grey">__________________Register__________________</div>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <input id="name" type="text" class="input-form form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Name" autofocus style="width:100%;">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <input id="email" type="email" class="input-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <input id="role" type="text" class="input-form form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required placeholder="Role" style="width:100%;">
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <input id="password" type="password" class="input-form form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <input id="password-confirm" type="password" class="input-form form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-login">Register Now</button>
            </div>
            <br>
        </form>
    </div>
@endsection
