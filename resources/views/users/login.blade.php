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
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="email" placeholder="Email" name="email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" placeholder="Password" class="input">
                    </div>
                </div>
                <a class="ancr" href="/register">Sign Up</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
