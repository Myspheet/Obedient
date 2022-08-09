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
            <form method="POST" action="/users">
                @csrf
                <h2 class="title">Sign Up</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" placeholder="Full Name" name="name" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="email" placeholder="Email" name="email" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <input type="Number" placeholder="Phone Number" name="number" class="input">
                    </div>
                </div>


                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" placeholder="Password" name="password" class="input">
                    </div>
                </div>

                <div class="select-input">
                    <select class="select-op" name="state" id="state">
                        <option value="#">State</option>
                        <option value=Delta">Delta</option>
                        <option value="Edo">Edo</option>
                        <option value="#">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                    <select class="select-op" name="lga" id="lga">
                        <option value="#">LGA</option>
                        <option value="Delta">Delta</option>
                        <option value="Edo">Edo</option>
                        <option value="#">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                </div>
                <div class="select-input">
                    <select class="select-op" name="ward" id="ward">
                        <option value="#">Ward</option>
                        <option value="jsdj">Delta</option>
                        <option value="sdhhsd">Edo</option>
                        <option value="sjdjsd">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                    <select class="select-op" name="pollingUnit" id="pollingUnit">
                        <option value="jsjdj">Polling Unit</option>
                        <option value="jsdj">Delta</option>
                        <option value="ksdk">Edo</option>
                        <option value="jsdj">Lagos</option>
                        <option value="jsdj">Ekiti</option>
                    </select>
                </div>

                <div class="checkBox">
                    <div>
                        <input type="radio" class="check" id="member" name="rank" value="member">
                        <label class="check--label" for="member">Member</label>
                    </div>
                    <div>
                        <input type="radio" class="check" id="agent" name="rank" value="agent">
                        <label class="check--label" for="agent">Become an Agent</label>
                    </div>
                </div>

                <a class="ancr" href="/login">Sign In</a>
                <input type="submit" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
