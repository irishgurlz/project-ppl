<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FOCUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
    body{
        background-color: #DBDDF4;
    }

    .card {
        border-radius: 15px; 
        height: auto;
        width: 30rem; 
        margin-top: 16rem;
    }
    .login-logo{
        background-color: white;
        border-radius: 55px; 
        box-shadow: 0px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .login-info{
        border-radius: 10px;
        background-color: #F0EDFF;
        border-color: #F0EDFF;
        width: 280px;
        height: 40px;
    }

    .btn-login{
        background-color: #5038ED;
        color: white;
        /* font-size: 12px; */
    }
    </style>
</head>
<body>
    <div>
        
    </div>
    <div class="card mx-auto">
        <div class="card-body d-flex flex-column align-items-center">
            <img src="img/logo.png" class="login-logo p-2" style="width:100px; margin-top: -70px;" alt="...">
            <div class="mt-3 text-center" style="font-weight: bold; font-size: 25px;">FOCUS</div>
            <div class="text-center">Faculty and Organizational</div>
            <div class="text-center">Communication Unified System</div>
            {{-- <br> --}}
            <div class="text-center mt-3" style="color: grey">____________________Login____________________</div>
            <br>
            <form method="POST" action="{{ route('auth.verify') }}">
                @csrf
                <div class="login-info">
                    <img src="img/email.png"  style="margin-left: 10px;">
                    <input type="text" style="border: none; background: none; margin-top: 5px;" placeholder="Email">
                </div>
                <br>
                <div class="login-info">
                    <img src="img/lock.png" style="margin-left: 10px;">
                    <input type="text" style="border: none; background: none; margin-top: 5px;" placeholder="Password">
                </div>
                {{-- <br> --}}
                <div class="d-flex justify-content-between mt-2 mb-3">
                    <label for="remember" style="color:grey; font-size: 15px;">
                        <input type="radio" style="color:grey;" id="remember"> Remember Me
                    </label>
                    <a style="text-decoration: none; color:grey; font-size: 14px; font-weight:bold" href="">Forgot Password?</a>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-login">Login Now</button>
                </div>
                <br>
            </form>
        </div>
    </div>
    
    
</body>
</html>
