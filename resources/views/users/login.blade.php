<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="{{ asset('img/wave.png') }}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('img/bg.svg') }}">
        </div>
        <div class="login-content">
            <form method="POST" action="/users/authenticate">
                @csrf
                <img src="{{ asset('img/avatar.svg') }}">
                <h2 class="title">Welcome</h2>
                @error('fail')
                    <p class="error-m">{{ $message }}</p>
                @enderror
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="email" placeholder="Email" name="email" class="input"
                            value="{{ old('email') }}">
                    </div>
                </div>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" placeholder="Password" class="input"
                            value="{{ old('password') }}">
                    </div>
                </div>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                <a class="ancr" href="/register">Sign Up</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
