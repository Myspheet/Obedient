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
            <img src="{{ asset('img/undraw.svg') }}">
        </div>
        <div class="login-content">
            <form method="POST" action="/profile/{{ $user->id }}">
                @csrf
                @method('PUT')
                <h2 class="title">Edit Details</h2>
                {{-- Name --}}
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" placeholder="Full Name" name="name" class="input"
                            value="{{ $user->name }}">
                    </div>
                </div>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror


                {{-- Email --}}
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="email" value="{{ $user->email }}" placeholder="Email" name="email"
                            class="input">
                    </div>
                </div>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror

                {{-- phone number --}}
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <input type="Number" value="{{ $user->number }}" placeholder="Phone Number" name="number"
                            class="input">
                    </div>
                </div>
                @error('number')
                    <p class="error">{{ $message }}</p>
                @enderror

                <div class="select-input">
                    <select class="select-op" name="state" id="state">
                        <option value="">State</option>
                        <option value=Delta">Delta</option>
                        <option value="Edo">Edo</option>
                        <option value="#">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                    @error('state')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <select class="select-op" name="lga" id="lga">
                        <option value="">LGA</option>
                        <option value="Delta">Delta</option>
                        <option value="Edo">Edo</option>
                        <option value="#">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                    @error('lga')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="select-input">
                    <select class="select-op" name="ward" id="ward">
                        <option value="">Ward</option>
                        <option value="jsdj">Delta</option>
                        <option value="sdhhsd">Edo</option>
                        <option value="sjdjsd">Lagos</option>
                        <option value="#">Ekiti</option>
                    </select>
                    @error('ward')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <select class="select-op" name="pollingUnit" id="pollingUnit">
                        <option value="">Polling Unit</option>
                        <option value="jsdj">Delta</option>
                        <option value="ksdk">Edo</option>
                        <option value="jsdj">Lagos</option>
                        <option value="jsdj">Ekiti</option>
                    </select>
                    @error('pollingUnit')
                        <p class="error">{{ $message }}</p>
                    @enderror
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
                @error('rank')
                    <p class="error">{{ $message }}</p>
                @enderror

                <a class="ancr" href="/profile"><i class="fa fa-arrow-left"></i> Back</a>
                <input type="submit" class="btn" value="Update">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
